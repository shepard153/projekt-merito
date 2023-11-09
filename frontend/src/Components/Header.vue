<script setup>
defineProps({
  title: String,
  description: String,
});
</script>

<template>
  <div class="pb-24 sm:pb-32 lg:max-w-7xl items-center lg:grid-cols-2 relative mx-auto grid w-full max-w-2xl gap-x-16 gap-y-12 px-6 pt-10">
    <div>
      <h1 class="text-5xl font-bold sm:text-6xl">{{ title }}</h1>
      <p class="mt-4 text-gray-600">
        {{ description}}
      </p>
    </div>
    
    <div class="flex justify-end">
      <div class="group relative max-w-[400px]">
        <div class="rounded-lg border border-gray-100 p-6 text-sm text-gray-600 shadow-card transition duration-300 group-hover:-translate-y-1 group-hover:border-gray-200 lg:ml-auto lg:p-8">
          <div class="font-medium">
            <span class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 font-bold text-emerald-600 hover:text-emerald-700">
              Coś
            </span>
          </div>
          <p class="mt-1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores atque autem blanditiis cumque
          </p>
        </div>
        <span class="inline-flex rounded-sm transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-emerald-600/80 absolute inset-0 !block h-full w-full !rounded-lg">
        </span>
      </div>
    </div>

  </div>
</template>