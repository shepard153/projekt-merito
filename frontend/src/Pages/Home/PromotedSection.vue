<script setup>

</script>

<template title="Products">
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
</template>