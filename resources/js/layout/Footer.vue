<script setup>
import { useI18n } from "vue-i18n";
import CardBox from "@/components/CardBox.vue";
import "vue3-carousel/dist/carousel.css";

const { t, locale } = useI18n();
</script>
<template>
  <div class="overflow-visible footer-background bg-no-repeat px-24 pb-2">
    <div class="flex justify-end">
      <div class="flex gap-[10px] pt-16 z-10 pb-9">
        <img src="/images/home/facebook-icon.svg" />
        <img src="/images/home/twitter-icon.svg" />
        <img src="/images/home/instagram-icon.svg" />
        <img src="/images/home/youtube-icon.svg" />
      </div>
    </div>
    <hr />
    <div class="py-4 grid grid-cols-4 text-start text-white gap-24">
      <div class="text-xl font-semibold">
        <p class="pb-3">{{ t("footer.aboutUs.title") }}</p>
        <p>{{ t("footer.aboutUs.content") }}</p>
      </div>
      <div class="flex flex-col gap-[6px]">
        <p class="text-xl font-semibold">
          {{ t("footer.contactInfo.title") }}
        </p>
        <div class="text-base">
          <p class="font-semibold pb-[1px]">
            {{ t("footer.contactInfo.address") }}
          </p>
          <p class="font-normal">
            {{ t("footer.contactInfo.addressContent") }}
          </p>
        </div>
        <div>
          <p class="font-semibold pb-[1px]">
            {{ t("footer.contactInfo.email") }}
          </p>
          <p class="font-normal">nevo.monia@gmail.com</p>
        </div>
        <div>
          <p class="font-semibold pb-[1px]">
            {{ t("footer.contactInfo.phone") }}
          </p>
          <!-- <p class="font-normal">+972599968870</p> -->
          <div class="content-rtl ltr:text-end">
            <!-- Your RTL content goes here -->
            <!-- LTR content within RTL -->
            <span class="force-ltr !text-start">+972599968870</span>
          </div>
        </div>
      </div>
      <div>
        <p class="text-xl font-semibold pb-6">
          {{ t("footer.ourServices.title") }}
        </p>
        <p class="text-base font-semibold pb-3">
          {{ t("footer.ourServices.podCard") }}
        </p>
        <p class="text-base font-semibold pb-3">
          {{ t("footer.ourServices.script") }}
        </p>
        <p class="text-base font-semibold">
          {{ t("footer.ourServices.technical") }}
        </p>
      </div>
      <div>
        <p class="text-xl font-semibold pb-6">
          {{ t("footer.importantLinks.title") }}
        </p>
        <p class="text-base font-semibold pb-3">
          {{ t("footer.importantLinks.aboutUs") }}
        </p>
        <p class="text-base font-semibold pb-3">
          {{ t("footer.importantLinks.blog") }}
        </p>
        <p class="text-base font-semibold">
          {{ t("footer.importantLinks.articles") }}
        </p>
      </div>
    </div>
    <hr />
    <p class="text-white pt-3 text-[17px] font-normal">
      {{ t("footer.allRight") }}&nbsp;2024
    </p>
    <!-- <p class="underline w-full text-white"></p> -->
  </div>
</template>
<style>
.footer-background {
  background-image: url("/images/home/footer.svg");
  background-size: cover;
}
.content-rtl {
  direction: rtl;
}

.force-ltr {
  direction: ltr;
  unicode-bidi: bidi-override;
}
</style>
