<script setup>

</script>

<template class="">
  <div class="mx-auto flex w-full max-w-7xl items-center justify-between gap-4 px-6 py-6 md:gap-8 md:py-10">
    <div class="xl:gap-18 flex items-center gap-16">
      <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 hover:-translate-y-1 hover:opacity-70 focus-visible:ring-offset-2">
        <img class="lg:h-18 lg:w-18 h-12 w-12 sm:h-16 sm:w-16 scale-150" width="87" height="86" src="https://img.freepik.com/premium-vector/letter-s-thunder-logo-design_8586-128.jpg?w=2000" alt="Logo">
      </a>
      <div class="hidden items-center gap-4 sm:flex md:gap-8">
        <router-link to="/" class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 p-1 font-bold hover:text-gray-600">
          Strona główna
        </router-link>
        <router-link to="/blog"  class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 p-1 font-bold hover:text-gray-600">
          Blog
        </router-link>
        <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 !hidden p-1 font-bold hover:text-gray-600 md:!inline-flex">
          Newsletter
        </a>
      </div>
    </div>
    <div class="xl:gap-18 flex items-center gap-16">
      <div class="hidden items-center gap-4 md:gap-8 lg:flex">
        <a class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 p-1 font-bold hover:text-gray-600">
          Panel
        </a>
      </div>
      <div class="-mr-1 flex items-center gap-2">
        <button class="inline-flex rounded-sm p-1 leading-none text-black transition duration-300 hover:text-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 focus-visible:ring-offset-4 focus-visible:ring-offset-white"
                @click.prevent="searchModalIsOpen = true">
          <img src="https://picperf.io/https://laravel-news.com/images/icons/search.svg" class="h-6 w-6" alt="Search">
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>