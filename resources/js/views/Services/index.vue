<script setup>
import { useI18n } from "vue-i18n";
import ServiceCard from "@/components/ServiceCard.vue";
import "vue3-carousel/dist/carousel.css";

const { t, locale } = useI18n();
</script>
<template>
  <div class="max-w-[1440px] mx-auto px-24">
    <div class="pt-12">
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
    </div>
    <div class="pt-16 pb-16">
      <div class="flex">
        <service-card
          class="border-t ltr:border-r rtl:border-l border-[#E2E2E2]"
          :title="t('services.podCast.title')"
          :content="t('services.podCast.content')"
          src="/images/services/podcast.svg"
        />
        <service-card
          class="border-t border-[#E2E2E2]"
          :title="t('services.podCast.title')"
          :content="t('services.podCast.content')"
          src="/images/services/user.svg"
        />
        <service-card
          class="border-t ltr:border-l rtl:border-r border-[#E2E2E2]"
          :title="t('services.podCast.title')"
          :content="t('services.podCast.content')"
          src="/images/services/phone.svg"
        />
      </div>
      <div class="flex">
        <service-card
          class="border-t ltr:border-r rtl:border-l border-[#E2E2E2]"
          :title="t('services.podCast.title')"
          :content="t('services.podCast.content')"
          src="/images/services/podcast.svg"
        />
        <service-card
          class="border-t border-[#E2E2E2]"
          :title="t('services.podCast.title')"
          :content="t('services.podCast.content')"
          src="/images/services/user.svg"
        />
        <service-card
          class="border-t ltr:border-l rtl:border-r border-[#E2E2E2]"
          :title="t('services.podCast.title')"
          :content="t('services.podCast.content')"
          src="/images/services/phone.svg"
        />
      </div>
      <div class="flex">
        <service-card
          class="border-t ltr:border-r rtl:border-l border-[#E2E2E2]"
          :title="t('services.podCast.title')"
          :content="t('services.podCast.content')"
          src="/images/services/podcast.svg"
        />
        <service-card
          class="border-t border-[#E2E2E2]"
          :title="t('services.podCast.title')"
          :content="t('services.podCast.content')"
          src="/images/services/user.svg"
        />
        <service-card
          class="border-t ltr:border-l rtl:border-r border-[#E2E2E2]"
          :title="t('services.podCast.title')"
          :content="t('services.podCast.content')"
          src="/images/services/phone.svg"
        />
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
