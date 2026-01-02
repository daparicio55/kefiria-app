<!DOCTYPE html>
<html class="light" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Kefiria - Yogures de Kéfir Amazónicos</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600;800&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-background-light dark:bg-background-dark font-body text-earth-dark dark:text-slate-100 transition-colors duration-200 bg-leaf-pattern">
    <div class="w-full">
        <div
            class="px-4 md:px-10 py-3 border-b border-jungle-medium/20 dark:border-jungle-medium/40 bg-white/80 dark:bg-jungle-dark/90 backdrop-blur-sm sticky top-0 z-50">
            <header class="flex items-center justify-between whitespace-nowrap max-w-[1200px] mx-auto">
                <div class="flex items-center gap-4">
                    <div class="size-8 text-jungle-medium dark:text-primary">
                        <span class="material-symbols-outlined text-4xl">forest</span>
                    </div>
                    <h2
                        class="text-2xl font-display font-bold leading-tight tracking-[-0.015em] text-jungle-dark dark:text-white">
                        Kefiria</h2>
                </div>
                <div class="hidden md:flex flex-1 justify-end gap-8 items-center">
                    <div class="flex items-center gap-6 lg:gap-9 text-jungle-medium dark:text-gray-300">
                        <a class="text-sm font-medium leading-normal hover:text-secondary transition-colors"
                            href="#">Productos</a>
                        <a class="text-sm font-medium leading-normal hover:text-secondary transition-colors"
                            href="#">Amazonas</a>
                        <a class="text-sm font-medium leading-normal hover:text-secondary transition-colors"
                            href="#">Beneficios</a>
                        <a class="text-sm font-medium leading-normal hover:text-secondary transition-colors"
                            href="#">Tiendas</a>
                    </div>
                    <button
                        class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-6 bg-secondary text-white hover:bg-secondary/90 shadow-md transition-all text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Probar Ahora</span>
                    </button>
                </div>
                <div class="md:hidden text-jungle-dark dark:text-white">
                    <span class="material-symbols-outlined">menu</span>
                </div>
            </header>
        </div>
    </div>
    <div class="w-full">
        <div class="max-w-[1200px] mx-auto p-4 md:p-10">
            <div class="@container">
                <div class="flex min-h-[560px] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-2xl items-center justify-center p-8 md:p-16 relative overflow-hidden shadow-2xl"
                    data-alt="Fresh yogurt bowl with berries and mint leaves on a wooden table outdoors"
                    style='background-image: linear-gradient(rgba(5, 31, 11, 0.3) 0%, rgba(5, 31, 11, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuC4lUE9SvSPdIteCL3X46zjD4rGG5CNeNqbTf6EGyzNQNrD7D8pafsQS2V3E5-Vka3hJXINQQScxRMoJfjgYPW27c8mbpjZY6TlFTsoKrlWj8Prc_FdsVK2qgE7FODiYG5zh3q7r7mTQO0YqtldncpMO5n-THRKuNXo1OD1wOEwphSZ3sho15XHP2QHIQ8K3vahdxF2dTJChcVmWkm7iFhaWS_sgYrAQU2nItS7T1SLKmB4YEwCc-6MpE6-LZ69G05SHrUx5ebrd38");'>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-jungle-dark/80 via-transparent to-transparent z-0">
                    </div>
                    <div class="flex flex-col gap-4 text-center max-w-[800px] relative z-10">
                        <span class="text-primary font-bold tracking-widest uppercase text-sm drop-shadow-md">El secreto
                            del Amazonas</span>
                        <h1
                            class="text-white text-5xl md:text-7xl font-display font-black leading-tight tracking-[-0.033em] drop-shadow-lg">
                            Kéfir con Alma de Selva
                        </h1>
                        <h2
                            class="text-gray-100 text-lg md:text-xl font-normal leading-relaxed drop-shadow-md max-w-2xl mx-auto">
                            Yogures probióticos cultivados con la pureza de la región Amazonas de Perú. Salud ancestral
                            para tu vida moderna.
                        </h2>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 mt-6 relative z-10">
                        <button
                            class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-14 px-8 bg-primary text-jungle-dark hover:bg-white transition-colors text-base font-bold leading-normal tracking-[0.015em] shadow-lg">
                            <span class="truncate">Descubrir Sabores</span>
                        </button>
                        <button
                            class="flex min-w-[140px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-14 px-8 bg-jungle-dark/40 backdrop-blur-md border border-white/30 text-white hover:bg-jungle-dark/60 transition-colors text-base font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Nuestra Misión</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full py-5">
        <div class="max-w-[1200px] mx-auto px-4 md:px-10">
            <div
                class="flex flex-col md:flex-row justify-between items-end gap-4 border-b border-jungle-medium/20 dark:border-gray-800 pb-6">
                <div>
                    <span
                        class="text-secondary font-bold text-sm tracking-wider uppercase mb-2 block flex items-center gap-1"><span
                            class="material-symbols-outlined text-sm">spa</span> Frutos Exóticos</span>
                    <h2
                        class="text-3xl md:text-4xl font-display font-bold leading-tight tracking-[-0.02em] text-jungle-dark dark:text-white">
                        Cosecha Amazónica</h2>
                </div>
                <a class="text-sm font-bold border-b-2 border-secondary pb-1 text-jungle-medium dark:text-primary hover:text-secondary dark:hover:text-secondary transition-colors flex items-center gap-1"
                    href="#">
                    Ver Todos los Productos <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full pb-16">
        <div class="max-w-[1200px] mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="group flex flex-col gap-4 rounded-2xl bg-white dark:bg-jungle-dark border border-gray-100 dark:border-jungle-medium p-4 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="w-full bg-center bg-no-repeat aspect-[4/5] bg-cover rounded-xl relative overflow-hidden"
                        data-alt="Glass jar of plain white kefir yogurt with a wooden spoon"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBCFGTmr4SfW9o420BVKPEUf9e_60vEanrSMGJ-pL5Gd8HarYa6r08yK7ExdZ0XecXX58txdQprAqHL7B_RRh4trhOmSROqGDGUbwmfjpq3ZUV2JIdT1bTjQZqNgXUFlz0odFj8UxgjXGAVD0J1ewDgeDEhBXFSj_59cv6AhOPQGEb_0BwHbEGphmsWb2EhSQD-uLzeKOfJoTzFkNvshXF5bRD5NSQxK7nOs143goLaMcasjc_xlquLzXOWyG_0ZYKqANGfi7rBhiA");'>
                        <div
                            class="absolute top-3 right-3 bg-secondary/90 backdrop-blur text-xs font-bold px-3 py-1 rounded-full text-white shadow-sm">
                            Favorito</div>
                    </div>
                    <div class="px-2 pb-2">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-display font-bold leading-normal text-jungle-dark dark:text-white">
                                Clásico Andino</h3>
                            <span class="text-lg font-bold text-secondary">$4.99</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm font-normal leading-normal mb-4">Base pura
                            de leche de pastoreo libre, fermentada lentamente en altura.</p>
                        <button
                            class="w-full h-12 rounded-xl bg-jungle-medium text-white font-bold text-sm hover:bg-jungle-dark transition-colors shadow-md flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-sm">shopping_bag</span> Añadir al Carrito
                        </button>
                    </div>
                </div>
                <div
                    class="group flex flex-col gap-4 rounded-2xl bg-white dark:bg-jungle-dark border border-gray-100 dark:border-jungle-medium p-4 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="w-full bg-center bg-no-repeat aspect-[4/5] bg-cover rounded-xl relative overflow-hidden"
                        data-alt="Strawberry yogurt smoothie in a glass with fresh strawberries around it"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDVe39W6UDAKGdPVnIpw91NbgD42TRi46jyjpbgom6Zz0qBIJnvuIktcp4o9UoQhgWagoAACjwZPq4DHnIEAgQZCYYpqqmQBcXhrWMD_29IvFRkGj3km2fc60ayJa6FSLdejrH5G6b3YjM5hdmhLnH0OzD0kkirTxDLJ92CpWdAKQRKaHcRjyCh8pzwjVjR6066XhiTd0w4vDG6wR9sz30gtNyVoapmKk-6Gj-maNiXM_WIpTttd8qWp6lojIpiwoYe4bQMKvllNk8");'>
                    </div>
                    <div class="px-2 pb-2">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-display font-bold leading-normal text-jungle-dark dark:text-white">
                                Camu Camu &amp; Fresa</h3>
                            <span class="text-lg font-bold text-secondary">$5.49</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm font-normal leading-normal mb-4">La
                            vitamina C del Camu Camu amazónico mezclada con fresas silvestres.</p>
                        <button
                            class="w-full h-12 rounded-xl bg-jungle-medium text-white font-bold text-sm hover:bg-jungle-dark transition-colors shadow-md flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-sm">shopping_bag</span> Añadir al Carrito
                        </button>
                    </div>
                </div>
                <div
                    class="group flex flex-col gap-4 rounded-2xl bg-white dark:bg-jungle-dark border border-gray-100 dark:border-jungle-medium p-4 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <div class="w-full bg-center bg-no-repeat aspect-[4/5] bg-cover rounded-xl relative overflow-hidden"
                        data-alt="Blueberry yogurt drink with fresh blueberries scattered on surface"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA_od7qrE19FrbKDwUeEuAMwEo-DL0RNghj1_WuEhW5vY1wdYjnupXDX4Eo5HnhHt-ANyXYaKKrZAxw5J8YwmrKJjdokfjdRof1LcogAXg5-t4_7uqQCom4uXT7IcWWr7347RVoRiObot7i0QprW2xuImbxlyGhmc76bAvaJfdTnk1ScQh_UfPfslawX0dn4k8GyhcKBf0eW5mJ2y-xctBgF7P90cbhUFBcKk9kMyuDuAccdiCVhVsDXOZxgnHJHWwaDHMYRpDk-sk");'>
                    </div>
                    <div class="px-2 pb-2">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-display font-bold leading-normal text-jungle-dark dark:text-white">
                                Açaí &amp; Arándanos</h3>
                            <span class="text-lg font-bold text-secondary">$5.49</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm font-normal leading-normal mb-4">Potencia
                            antioxidante de la selva profunda con el toque dulce del bosque.</p>
                        <button
                            class="w-full h-12 rounded-xl bg-jungle-medium text-white font-bold text-sm hover:bg-jungle-dark transition-colors shadow-md flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-sm">shopping_bag</span> Añadir al Carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-earth-light dark:bg-jungle-dark py-20 relative overflow-hidden">
        <div
            class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-primary/20 rounded-full blur-[100px] pointer-events-none">
        </div>
        <div class="max-w-[1200px] mx-auto px-4 md:px-10">
            <div class="flex flex-col lg:flex-row gap-16 items-center">
                <div class="flex-1 flex flex-col gap-8 relative z-10">
                    <div class="flex flex-col gap-4">
                        <h1
                            class="text-4xl md:text-5xl font-display font-bold leading-tight tracking-[-0.033em] text-jungle-dark dark:text-white">
                            ¿Por qué elegir Kefiria?
                        </h1>
                        <p class="text-slate-700 dark:text-slate-300 text-lg font-normal leading-relaxed">
                            Fusionamos la sabiduría ancestral de las comunidades nativas con la biotecnología moderna.
                            Un superalimento vivo que respeta la tierra y tu cuerpo.
                        </p>
                    </div>
                    <div class="flex flex-col gap-6">
                        <div
                            class="flex gap-4 p-5 rounded-2xl border border-jungle-medium/10 bg-white dark:bg-background-dark shadow-sm hover:shadow-md transition-shadow">
                            <div
                                class="size-14 rounded-full bg-primary/20 flex items-center justify-center shrink-0 text-jungle-medium">
                                <span class="material-symbols-outlined text-3xl">compost</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold leading-tight mb-2 text-jungle-dark dark:text-white">
                                    Fermentación Natural</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">Cultivos probióticos nativos,
                                    fermentados lentamente para máxima potencia.</p>
                            </div>
                        </div>
                        <div
                            class="flex gap-4 p-5 rounded-2xl border border-jungle-medium/10 bg-white dark:bg-background-dark shadow-sm hover:shadow-md transition-shadow">
                            <div
                                class="size-14 rounded-full bg-secondary/20 flex items-center justify-center shrink-0 text-secondary">
                                <span class="material-symbols-outlined text-3xl">water_drop</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold leading-tight mb-2 text-jungle-dark dark:text-white">Agua
                                    de Manantial</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">Utilizamos agua pura de
                                    manantiales andinos en nuestros procesos de lavado y preparación.</p>
                            </div>
                        </div>
                        <div
                            class="flex gap-4 p-5 rounded-2xl border border-jungle-medium/10 bg-white dark:bg-background-dark shadow-sm hover:shadow-md transition-shadow">
                            <div
                                class="size-14 rounded-full bg-primary/20 flex items-center justify-center shrink-0 text-jungle-medium">
                                <span class="material-symbols-outlined text-3xl">psychiatry</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold leading-tight mb-2 text-jungle-dark dark:text-white">
                                    Biodiversidad Protegida</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-sm">Parte de nuestras ganancias
                                    protegen hectáreas de bosque amazónico.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 w-full relative">
                    <div class="w-full aspect-square rounded-[2rem] overflow-hidden shadow-2xl relative z-10 border-4 border-white/20"
                        data-alt="Overhead shot of various healthy yogurt toppings like nuts, honey, and sliced fruits"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDnF5nXzBUGTFkegdZFPdpkIuDp6I4KfC8x4DEO04clEE56yP7wU9hzqsDb7vEqB-uMP27x00VvpU9qspBuYUUEp0AtQkz0Pg0VgTrPIHlp6XHypzDc6uyBmGWYtegZe0HER8v7smZMd6nC7OsGSqe-Tuufvxr_aGNOrJq6Qca95Pg0HSB68zBYsQtoJ5RnEo_D8hiKUENncfDjF5F0Gd8CUB4cf6aT-Hj4ZlhOonEwUw_rwqb1dRtpfmM-8NwyeqPgo0Z13iBkdRc"); background-size: cover; background-position: center;'>
                    </div>
                    <div class="absolute -bottom-10 -left-10 size-64 bg-secondary/20 rounded-full blur-3xl z-0"></div>
                    <div class="absolute -top-10 -right-10 size-64 bg-primary/30 rounded-full blur-3xl z-0"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-background-light dark:bg-background-dark py-20 border-t border-jungle-medium/20 relative">
        <div class="absolute right-0 top-0 opacity-10 dark:opacity-5 pointer-events-none">
            <svg class="h-full w-auto" fill="none" height="800" viewBox="0 0 400 800" width="400"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M400 0H0V800H400V0Z" fill="url(#paint0_linear)"></path>
                <path d="M289.5 204C289.5 204 186.5 273.5 131 433C75.5 592.5 178 743 178 743" stroke="#2E5C35"
                    stroke-width="2"></path>
                <path d="M312 254C312 254 209 323.5 153.5 483C98 642.5 200.5 793 200.5 793" stroke="#2E5C35"
                    stroke-width="2"></path>
            </svg>
        </div>
        <div class="max-w-[1200px] mx-auto px-4 md:px-10 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-secondary font-bold text-sm tracking-wider uppercase mb-2 block">Nutrición de la
                    Tierra</span>
                <h2
                    class="text-3xl md:text-5xl font-display font-bold leading-tight tracking-tight text-jungle-dark dark:text-white mb-6">
                    Poder Natural en Cada Botella
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-lg">
                    La naturaleza es nuestra científica. Sin aditivos extraños, solo la potencia nutricional que la
                    Amazonía peruana tiene para ofrecer.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg border-b-4 border-b-jungle-medium flex flex-col items-center text-center gap-4 hover:-translate-y-2 transition-transform duration-300">
                    <div
                        class="size-16 rounded-full bg-green-50 dark:bg-green-900/20 flex items-center justify-center text-jungle-medium dark:text-primary">
                        <span class="material-symbols-outlined text-3xl">nutrition</span>
                    </div>
                    <div>
                        <h3 class="text-4xl font-black text-jungle-dark dark:text-white mb-1">11g</h3>
                        <p class="text-sm font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wide">
                            Proteína Natural</p>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Fuerza pura para tu cuerpo, directo de la
                        naturaleza.</p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg border-b-4 border-b-secondary flex flex-col items-center text-center gap-4 hover:-translate-y-2 transition-transform duration-300">
                    <div
                        class="size-16 rounded-full bg-orange-50 dark:bg-orange-900/20 flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined text-3xl">coronavirus</span>
                    </div>
                    <div>
                        <h3 class="text-4xl font-black text-jungle-dark dark:text-white mb-1">12</h3>
                        <p class="text-sm font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wide">Cepas
                            Vivas</p>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Un ecosistema diverso para tu bienestar interno.
                    </p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg border-b-4 border-b-primary flex flex-col items-center text-center gap-4 hover:-translate-y-2 transition-transform duration-300">
                    <div
                        class="size-16 rounded-full bg-yellow-50 dark:bg-yellow-900/20 flex items-center justify-center text-yellow-600 dark:text-yellow-400">
                        <span class="material-symbols-outlined text-3xl">emoji_nature</span>
                    </div>
                    <div>
                        <h3 class="text-4xl font-black text-jungle-dark dark:text-white mb-1">20%</h3>
                        <p class="text-sm font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wide">Calcio
                            Orgánico</p>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Minerales esenciales absorbidos de suelos ricos.
                    </p>
                </div>
                <div
                    class="bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-lg border-b-4 border-b-jungle-dark flex flex-col items-center text-center gap-4 hover:-translate-y-2 transition-transform duration-300">
                    <div
                        class="size-16 rounded-full bg-purple-50 dark:bg-purple-900/20 flex items-center justify-center text-purple-600 dark:text-purple-400">
                        <span class="material-symbols-outlined text-3xl">no_meals</span>
                    </div>
                    <div>
                        <h3 class="text-4xl font-black text-jungle-dark dark:text-white mb-1">0g</h3>
                        <p class="text-sm font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wide">Azúcar
                            Añadida</p>
                    </div>
                    <p class="text-xs text-slate-500 leading-relaxed">Dulzor de frutas maduradas bajo el sol amazónico.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-jungle-dark py-24 relative">
        <div class="absolute inset-0 opacity-20"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBMvO0bf-cjQo-eGYARV9y48HEpCZkeqxXCpGBdIgU8foVb-KFr4BhmC-6XlXlwMJknEENG0dvQVtSnaAVHZ8DuXbv7XZdknsDJhxvGgyITzAgjkwJFhkogviljtZV0sg0YWCVPtkvfAMopiN7JF-RNCQhl0MOordq-FhxMl4qXbJ1unbyHu6EwCc_QvAi97PLLkj1OYftE-4cWhXWRKpzOpJbIs04gYp4X6HrbrWE1s0Oka2gOPQPb72xYkX-XpdIMTKP9BCrnmCw");'>
        </div>
        <div class="max-w-[1200px] mx-auto px-4 md:px-10 flex flex-col items-center gap-12 relative z-10">
            <div class="text-center max-w-2xl">
                <span class="text-primary font-bold text-sm tracking-wider uppercase mb-2 block">Historias de
                    Origen</span>
                <h2
                    class="text-3xl md:text-5xl font-display font-bold leading-tight tracking-[-0.02em] text-white mb-6">
                    El Corazón del Bosque</h2>
                <p class="text-gray-300 text-lg">
                    Viaja con nosotros a las profundidades de la selva peruana. Conoce a los agricultores y el proceso
                    artesanal que hace único a Kefiria.
                </p>
            </div>
            <div
                class="w-full relative aspect-video rounded-3xl overflow-hidden shadow-2xl group cursor-pointer border-4 border-white/10">
                <div class="absolute inset-0 bg-slate-900">
                    <div class="absolute inset-0 opacity-70 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDnF5nXzBUGTFkegdZFPdpkIuDp6I4KfC8x4DEO04clEE56yP7wU9hzqsDb7vEqB-uMP27x00VvpU9qspBuYUUEp0AtQkz0Pg0VgTrPIHlp6XHypzDc6uyBmGWYtegZe0HER8v7smZMd6nC7OsGSqe-Tuufvxr_aGNOrJq6Qca95Pg0HSB68zBYsQtoJ5RnEo_D8hiKUENncfDjF5F0Gd8CUB4cf6aT-Hj4ZlhOonEwUw_rwqb1dRtpfmM-8NwyeqPgo0Z13iBkdRc");'>
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-black/20 group-hover:bg-black/40 transition-colors">
                    </div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div
                        class="size-20 md:size-28 rounded-full bg-white/10 backdrop-blur-md border border-white/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300 shadow-[0_0_30px_rgba(255,255,255,0.2)]">
                        <div
                            class="size-14 md:size-20 rounded-full bg-secondary text-white flex items-center justify-center shadow-lg pl-1">
                            <span class="material-symbols-outlined text-4xl md:text-6xl">play_arrow</span>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-8 left-8 md:bottom-12 md:left-12 text-white">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="bg-primary text-jungle-dark text-xs font-bold px-2 py-1 rounded">NUEVO</span>
                        <p class="text-sm font-bold uppercase tracking-wider opacity-90">Mini Documental</p>
                    </div>
                    <h3 class="text-2xl md:text-4xl font-bold font-display">Guardianes de la Fermentación</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full py-20 bg-[#f4f7f2] dark:bg-background-dark relative">
        <div class="max-w-[1200px] mx-auto px-4 md:px-10">
            <div
                class="flex flex-col md:flex-row gap-8 h-[600px] rounded-[2rem] overflow-hidden shadow-2xl border border-jungle-medium/10 dark:border-gray-800">
                <div class="w-full md:w-1/3 bg-white dark:bg-slate-800 p-8 flex flex-col z-10">
                    <div class="mb-6">
                        <h2 class="text-3xl font-display font-bold text-jungle-dark dark:text-white mb-2">Encuentra tu
                            Oasis</h2>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Descubre los puntos de venta con Kefiria
                            fresco cerca de ti.</p>
                    </div>
                    <div class="relative mb-6">
                        <span
                            class="absolute left-4 top-3.5 text-jungle-medium material-symbols-outlined">forest</span>
                        <input
                            class="w-full h-14 rounded-2xl bg-slate-50 dark:bg-slate-700 pl-12 pr-4 text-sm border-0 focus:ring-2 focus:ring-jungle-medium dark:text-white shadow-inner"
                            placeholder="Buscar ciudad..." type="text" />
                    </div>
                    <div class="flex-1 overflow-y-auto pr-2 space-y-4 custom-scrollbar">
                        <div
                            class="p-5 rounded-2xl border-2 border-jungle-medium bg-jungle-medium/5 cursor-pointer relative overflow-hidden">
                            <div class="absolute right-0 top-0 p-2">
                                <span
                                    class="bg-secondary text-white text-[10px] font-bold px-2 py-1 rounded-full">POPULAR</span>
                            </div>
                            <h3 class="font-bold text-lg text-jungle-dark dark:text-white">EcoMarket Amazonía</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Av. La Marina 240</p>
                            <div class="flex items-center gap-2 mt-3 text-xs font-bold text-jungle-medium">
                                <span class="material-symbols-outlined text-sm">near_me</span>
                                <span>0.5 km · Stock alto</span>
                            </div>
                        </div>
                        <div
                            class="p-5 rounded-2xl border border-gray-200 dark:border-gray-700 hover:bg-green-50 dark:hover:bg-slate-700 cursor-pointer transition-colors">
                            <h3 class="font-bold text-lg text-jungle-dark dark:text-white">BioTienda Raíces</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Jr. Los Pinos 456</p>
                            <div class="flex items-center gap-2 mt-3 text-xs font-medium text-slate-400">
                                <span class="material-symbols-outlined text-sm">near_me</span>
                                <span>1.2 km · Pocas unidades</span>
                            </div>
                        </div>
                        <div
                            class="p-5 rounded-2xl border border-gray-200 dark:border-gray-700 hover:bg-green-50 dark:hover:bg-slate-700 cursor-pointer transition-colors">
                            <h3 class="font-bold text-lg text-jungle-dark dark:text-white">Supermercado Orgánico</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Calle Selva Alegre 89</p>
                            <div class="flex items-center gap-2 mt-3 text-xs font-medium text-slate-400">
                                <span class="material-symbols-outlined text-sm">near_me</span>
                                <span>3.4 km · Stock alto</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block flex-1 bg-[#e0e8d9] dark:bg-slate-700 relative overflow-hidden group">
                    <div class="absolute inset-0 opacity-40 dark:opacity-20 mix-blend-multiply"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB6cdXkelITOPEYgB7YSdRLTKdIXgrqGpPuYhjdUGabKoY33_Qjn1PguIX-MYKMIXdi5bgPZ_YpYeUL-j-zGw8uTzv5Iybx0ybhLRajyfK4TMX5tarXKU2QtOm7sXhWo9bxLTXr5rqHYC7nlCAH4fwTTSXDMGJqGjf5Igf_J-Fz5qcJgousyxcWQR7uzBxntr21uWCdUCG4y6S3K03DrOQvaIWXtvL9wMSxD9k9wsmnCvFAAD7zFHs9br_ze_FO5ZkAZYfd8tBNsVk");'>
                    </div>
                    <div class="absolute top-0 right-0 w-full h-full">
                        <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 100 100">
                            <path class="text-white dark:text-slate-600" d="M0,50 Q25,45 50,50 T100,50" fill="none"
                                stroke="currentColor" stroke-width="4"></path>
                            <path class="text-white dark:text-slate-600" d="M40,0 Q45,50 40,100" fill="none"
                                stroke="currentColor" stroke-width="4"></path>
                            <path class="text-[#a8c6fa] dark:text-slate-600 opacity-60" d="M60,0 Q75,40 65,100"
                                fill="none" stroke="currentColor" stroke-width="12"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute top-1/3 left-1/3 -translate-x-1/2 -translate-y-1/2 flex flex-col items-center cursor-pointer hover:scale-110 transition-transform z-20">
                        <div
                            class="bg-white dark:bg-slate-800 px-4 py-2 rounded-xl shadow-lg mb-2 whitespace-nowrap text-sm font-bold text-jungle-dark dark:text-white border border-secondary">
                            EcoMarket Amazonía
                        </div>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined text-6xl text-secondary drop-shadow-xl relative z-10">location_on</span>
                            <div
                                class="absolute bottom-1 left-1/2 -translate-x-1/2 w-4 h-2 bg-black/20 blur-sm rounded-full">
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute bottom-1/4 right-1/4 flex flex-col items-center cursor-pointer hover:scale-110 transition-transform z-10 opacity-90 hover:opacity-100">
                        <span
                            class="material-symbols-outlined text-5xl text-jungle-medium dark:text-slate-400 drop-shadow-md">location_on</span>
                    </div>
                    <div
                        class="absolute top-1/4 right-1/3 flex flex-col items-center cursor-pointer hover:scale-110 transition-transform z-10 opacity-90 hover:opacity-100">
                        <span
                            class="material-symbols-outlined text-5xl text-jungle-medium dark:text-slate-400 drop-shadow-md">location_on</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="w-full bg-jungle-dark text-white pt-20 pb-10 border-t-8 border-primary relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-5 pointer-events-none"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA5CCyZvX6TLgiLBfD8ouePG_w3yqDf_-hvZPVhcWdEZaXBsg2B7x-Kr6oNXT1p1NE9OBIPycHh5S37DK-UzkhMbWnN2D0DFX6Txv1GzerZPJt5xXBpYcrNsPquCcX5sbFZJzrgFlKJkvsMAAiU06Oqh8sYs0sTZI4HWNbBbIBU3E1baHC5iO6nw2XAI7qamKrqwfKskClyAepzGse9MsSDq57wj17vVPvNU6gwi0P7uIxBn7P_7o6mv8nj0DdUcEIfwo5HnSsGDgc")'>
        </div>
        <div class="max-w-[1200px] mx-auto px-4 md:px-10 flex flex-col gap-10 relative z-10">
            <div class="flex flex-col md:flex-row justify-between gap-10">
                <div class="flex flex-col gap-4 max-w-[320px]">
                    <div class="flex items-center gap-2 text-white">
                        <span class="material-symbols-outlined text-4xl text-primary">forest</span>
                        <h2 class="text-2xl font-bold font-display">Kefiria</h2>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Elaborando los yogures de kéfir más frescos y potentes, directamente desde el corazón de la
                        Amazonía peruana.
                    </p>
                    <div class="flex gap-4 mt-2">
                        <a class="size-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary hover:text-jungle-dark transition-all"
                            href="#">
                            <svg aria-hidden="true" class="size-5" fill="currentColor" viewBox="0 0 24 24">
                                <path clip-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a class="size-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary hover:text-jungle-dark transition-all"
                            href="#">
                            <svg aria-hidden="true" class="size-5" fill="currentColor" viewBox="0 0 24 24">
                                <path clip-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153 1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.468 2.53c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-16">
                    <div class="flex flex-col gap-3">
                        <h3 class="font-bold text-lg text-primary">Tienda</h3>
                        <a class="text-sm text-gray-400 hover:text-white transition-colors" href="#">Todos los
                            Productos</a>
                        <a class="text-sm text-gray-400 hover:text-white transition-colors" href="#">Puntos de
                            Venta</a>
                        <a class="text-sm text-gray-400 hover:text-white transition-colors" href="#">Club
                            Kefiria</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-bold text-lg text-primary">Amazonía</h3>
                        <a class="text-sm text-gray-400 hover:text-white transition-colors" href="#">Nuestras
                            Comunidades</a>
                        <a class="text-sm text-gray-400 hover:text-white transition-colors"
                            href="#">Conservación</a>
                        <a class="text-sm text-gray-400 hover:text-white transition-colors"
                            href="#">Ingredientes Nativos</a>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="font-bold text-lg text-primary">Compañía</h3>
                        <a class="text-sm text-gray-400 hover:text-white transition-colors" href="#">Sobre
                            Nosotros</a>
                        <a class="text-sm text-gray-400 hover:text-white transition-colors"
                            href="#">Contacto</a>
                        <a class="text-sm text-gray-400 hover:text-white transition-colors" href="#">Prensa</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-center border-t border-white/10 pt-8 gap-4">
                <p class="text-xs text-gray-500">© 2024 Kefiria. Hecho con orgullo en Perú.</p>
                <div class="flex gap-6">
                    <a class="text-xs text-gray-500 hover:text-white" href="#">Privacidad</a>
                    <a class="text-xs text-gray-500 hover:text-white" href="#">Términos</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
