<script setup>
import { useI18n } from "vue-i18n";
const { t, locale } = useI18n();
</script>
<template>
  <div class="max-w-[1440px] mx-auto px-24">
    <div class="pt-12">
      <div class="relative">
        <p
          class="absolute ltr:left-8 rtl:right-8 top-[3px] text-2xl font-bold text-[#45315D] z-10"
        >
          {{ t("about.title") }}
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
    </div>
    <div class="pt-16 pb-5">
      <div class="flex items-center gap-24">
        <div class="text-start">
          <div class="flex text-start gap-11 pb-11 items-center">
            <img src="/images/about/bar.svg" />
            <p class="text-xl font-bold text-[#45315D]">
              {{ t("about.page.question") }}
            </p>
          </div>
          <p class="pb-7 text-xl font-bold text-[#45315D]">
            {{ t("about.page.title") }}
          </p>
          <p class="pb-3 text-xl text-[#403D3D] font-normal">
            {{ t("about.page.content") }}
          </p>
          <p class="text-xl text-[#403D3D] font-normal">
            {{ t("about.page.content") }}
          </p>
        </div>
        <img src="/images/about/1.svg" />
      </div>
    </div>
    <div class="pb-40">
      <div class="flex items-center gap-24">
        <img src="/images/about/2.svg" />
        <div class="text-start">
          <div class="flex text-start gap-11 pb-11 items-center">
            <img src="/images/about/bar.svg" />
            <p class="text-xl font-bold text-[#45315D]">
              {{ t("about.page.question") }}
            </p>
          </div>
          <p class="pb-7 text-xl font-bold text-[#45315D]">
            {{ t("about.page.title") }}
          </p>
          <p class="pb-3 text-xl text-[#403D3D] font-normal">
            {{ t("about.page.content") }}
          </p>
          <p class="text-xl text-[#403D3D] font-normal">
            {{ t("about.page.content") }}
          </p>
        </div>
      </div>
    </div>
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
