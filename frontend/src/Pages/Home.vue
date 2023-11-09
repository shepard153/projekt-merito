<script setup>
import PromotedSection from "./Home/PromotedSection.vue";
import Featured from "./Home/Featured.vue";
import SectionDivider from "../Components/SectionDivider.vue";
import Header from "../Components/Header.vue";

const title = "Strona główna";
const description = "Strona główna";
</script>

<template>
  <Header :title="title" :description="description"/>
  <PromotedSection/>
  <SectionDivider/>
  <Featured/>
</template>

<style scoped>

</style>