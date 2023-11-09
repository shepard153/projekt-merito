<script setup>
</script>

<template>
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
</template>