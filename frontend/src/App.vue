<script setup>
import Navbar from "./Components/Navbar.vue";
import Footer from "./Components/Footer.vue";
</script>

<template>
  <Navbar/>

  <main class="text-gray-800">
    <router-view/>
  </main>

  <Footer/>
</template>