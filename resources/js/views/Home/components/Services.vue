<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { useI18n } from "vue-i18n";
import CardBox from "@/components/CardBox.vue";
import "vue3-carousel/dist/carousel.css";

const { t, locale } = useI18n();
</script>
<template>
  <div class="max-w-[1440px] mx-auto flex pt-24 px-16 justify-between">
    <div>
      <div class="relative">
        <p
          class="absolute ltr:left-8 rtl:right-8 top-[3px] text-2xl font-bold text-[#45315D] z-10"
        >
          {{ t("home.ourServices.title") }}
        </p>
        <div
          :class="[
            ' absolute top-0 w-20 h-10 z-0',
            locale === 'en'
              ? 'react-circle-l rounded-tl-full rounded-bl-full left-0 '
              : 'react-circle-r rounded-tr-full rounded-br-full right-0 ',
          ]"
        ></div>
      </div>
      <div class="pt-24 pb-9 flex items-center gap-10 text-start">
        <img src="/images/home/bar.svg" />
        <p class="text-[#45315D] text-xl font-bold">
          {{ t("home.ourServices.subTitle") }}
        </p>
      </div>
      <p class="text-[#4B4B4B] text-start text-base font-semibold max-w-lg p-8">
        {{ t("home.ourServices.description") }}
      </p>
      <div class="pt-12 flex gap-3 text-start p-8">
        <img
          class="cursor-pointer"
          :src="[
            locale === 'en'
              ? '/images/home/arrow-l.svg'
              : '/images/home/arrow-r.svg',
          ]"
        />
        <img
          class="cursor-pointer"
          :src="[
            locale === 'en'
              ? '/images/home/arrow-r.svg'
              : '/images/home/arrow-l.svg',
          ]"
        />
      </div>
    </div>
    <div class="relative">
      <router-link to="/services">
        <p
          class="cursor-pointer absolute flex text-[#45315D] font-semibold text-base ltr:right-0 rtl:left-0 underline"
        >
          {{ t("home.ourServices.viewAll") }}
        </p>
      </router-link>
      <img src="/images/home/3.png" />
    </div>
  </div>
</template>
<style></style>
