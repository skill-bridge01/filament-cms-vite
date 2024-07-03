<script setup>
import { ref } from "vue";
import { useI18n } from "vue-i18n";
import Services from "./components/Services.vue";
import ResourceLibrary from "./components/ResourceLibrary.vue";
import Articles from "./components/Articles.vue";
import FAQ from "./components/FAQ.vue";
import About from "./components/About.vue";
import Contact from "./components/Contact.vue";
import "vue3-carousel/dist/carousel.css";

const { t, locale } = useI18n();
</script>
<template>
  <div class="mb-32">
    <div class="relative flex pt-9">
      <div class="max-w-[1440px] mx-auto">
        <div class="pt-14 xl:px-24 px-10 xl:gap-32 gap-14 flex items-center">
          <div class="">
            <h1 class="text-3xl font-bold pb-10 text-[#45315D] text-start">
              {{ t("home.title") }}
            </h1>
            <p class="text-xl font-normal max-w-2xl text-[#403D3D] text-start">
              {{ t("home.description") }}
            </p>
          </div>
          <img src="/images/home/1-1.png" alt="" />
        </div>
      </div>
      <img class="absolute right-0" src="/images/home/1-2.svg" />
    </div>
    <img class="pt-28 w-full" src="/images/home/2.svg" />

    <Services />
    <ResourceLibrary />
    <Articles />
    <FAQ />
    <About />
    <Contact />
  </div>
</template>

<style>
.react-circle-l {
  background-image: linear-gradient(to right, #ff9280, #ff2400);
}
.react-circle-r {
  background-image: linear-gradient(to right, #ff2400, #ff9280);
}
</style>
