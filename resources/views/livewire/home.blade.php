<div>
  <x-slot name="title">
      {{ __('Strona główna') }}
  </x-slot>

  <section class="mt-6 py-20">
    <div class="mx-auto grid max-w-2xl items-start gap-x-16 gap-y-8 px-6 lg:max-w-7xl lg:grid-cols-2">
      <div class="group relative" preload="preload">
        <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
          <img src="https://pbs.twimg.com/profile_images/949787136030539782/LnRrYf6e_400x400.jpg"
               alt="Text"
               class="h-full w-full rounded-lg object-cover" loading="lazy">
        </div>

        <div class="mt-6 flex items-center gap-3">
          <span class="inline-flex rounded-full px-4 py-2 text-xs font-bold leading-4 border border-emerald-600 text-emerald-600">
            Coś tam
          </span>
        </div>

        <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
          Tytuł arta
        </h3>

        <router-link class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 absolute inset-0 !block h-full w-full !rounded-lg"
                     to="/" onclick="">
        </router-link>
      </div>

      <div class="group relative" preload="preload">
        <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQl35FVUy3cTld1Fa7ae3yriZ9uoJuqft1-Q&usqp=CAU"
               alt="Text" class="h-full w-full rounded-lg object-cover" loading="lazy">
        </div>

        <div class="mt-6 flex items-center gap-3">
          <span class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 inline-flex !rounded-full px-4 py-2 text-xs font-bold leading-4 hover:opacity-80 focus-visible:ring-offset-1 border border-emerald-600 text-emerald-600">
            Badge 2
          </span>
        </div>

        <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
          Tytuł arta 2
        </h3>

        <router-link class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 absolute inset-0 !block h-full w-full !rounded-lg"
                     to="/">
        </router-link>
      </div>
    </div>
  </section>

  <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl">
    <hr class="border-gray-600/30">
  </div>

  <section class="py-20">
    <div class="mx-auto w-full max-w-2xl px-6 lg:max-w-7xl">
      <div class="flex flex-wrap items-center justify-between gap-x-8 gap-y-3">
        <h2 class="text-3xl font-bold sm:text-4xl lg:text-[40px]">Najnowsze artykuły</h2>
        <router-link to="/"
                     class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 font-bold text-emerald-600 hover:text-emerald-700">
          Zobacz wszystkie →
        </router-link>
      </div>

      <div class="mt-12 grid gap-x-8 gap-y-12 lg:grid-cols-3">
        <div class="group relative">
          <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
            <img src="https://www.wodkanawesela.pl/wp-content/uploads/2023/05/wodka-stock-prestige-smooth-05l.jpg"
                 alt="ALT" class="h-full w-full rounded-lg object-cover"
                 loading="lazy">
          </div>

          <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
            Lorem Ipsum
          </h3>

          <router-link
                  class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 absolute inset-0 !block h-full w-full !rounded-lg"
                  to="/">
          </router-link>
        </div>
        <div class="group relative">
          <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdf3yEEsdEA6sWHQH6gjlTaDzoYF8Qvgg-Rw&usqp=CAU"
                 alt="ALT" class="h-full w-full rounded-lg object-cover"
                 loading="lazy">
          </div>

          <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
            Lorem Ipsum
          </h3>

          <router-link
                  class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 absolute inset-0 !block h-full w-full !rounded-lg"
                  to="/">
          </router-link>
        </div>

        <div class="group relative">
          <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
            <img src="https://www.e-prim.pl/images/full/00aa13229e332203615189551695dfd6.jpg"
                 alt="ALT"
                 class="h-full w-full rounded-lg object-cover" loading="lazy">
          </div>

          <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
            Lorem Ipsum
          </h3>

          <router-link
                  class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 absolute inset-0 !block h-full w-full !rounded-lg"
                  to="/">
          </router-link>
        </div>

        <div class="group relative">
          <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
            <img src="https://www.petrolnet.pl/wp-content/uploads/2019/11/Stock_grand_prix_prestige_nowa_butelka_735x370-1200x900.jpg"
                 alt="ALT" class="h-full w-full rounded-lg object-cover" loading="lazy">
          </div>

          <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
            Lorem Ipsum
          </h3>

          <router-link
                  class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 absolute inset-0 !block h-full w-full !rounded-lg"
                  to="/">
          </router-link>
        </div>
        <div class="group relative">
          <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
            <img src="https://www.forfiterexclusive.pl/media/catalog/product/cache/054da64523b61cf01725d256b97d23f9/b/r/brandy_stock_84_vsop.jpg"
                 alt="ALT" class="h-full w-full rounded-lg object-cover"
                 loading="lazy">
          </div>

          <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
            Lorem Ipsum
          </h3>

          <router-link
                  class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 absolute inset-0 !block h-full w-full !rounded-lg"
                  to="/">
          </router-link>
        </div>
        <div class="group relative">
          <div class="aspect-[2/1] w-full rounded-lg bg-gray-100 shadow-card transition group-hover:opacity-80">
            <img src="https://i0.wp.com/www.wodkanawesela.pl/wp-content/uploads/2023/05/wodka-Stock-Prestige-Smooth-05l-40-sklad.jpg?fit=1080%2C1080&ssl=1"
                 alt="ALT" class="h-full w-full rounded-lg object-cover" loading="lazy">
          </div>

          <h3 class="mt-4 text-xl font-bold transition group-hover:text-emerald-600 sm:text-2xl">
            Lorem Ipsum
          </h3>

          <router-link
                  class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-red-600/80 absolute inset-0 !block h-full w-full !rounded-lg"
                  to="/">
          </router-link>
        </div>
      </div>
    </div>
  </section>
</div>