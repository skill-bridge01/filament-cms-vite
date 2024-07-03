<script setup>
import { useI18n } from "vue-i18n";
import CardBox from "@/components/CardBox.vue";
import "vue3-carousel/dist/carousel.css";

const { t, locale } = useI18n();
</script>
<template>
  <div class="max-w-[1440px] mx-auto">
    <div class="pt-32 px-16">
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
      <router-link to="/about">
        <p class="text-[#45315D] font-semibold text-base text-end underline">
          {{ t("home.ourServices.viewAll") }}
        </p>
      </router-link>
    </div>
    <div class="pt-12">
      <div class="relative">
        <img
          class="absolute left-0 ltr:hidden"
          src="/images/home/screw-arrow-r.svg"
        />
        <img
          class="absolute right-0 rtl:hidden"
          src="/images/home/screw-arrow-l.svg"
        />
        <p
          class="text-[#403D3D] font-normal text-[20px] text-start pl-16 rtl:pl-44 pr-44 rtl:pr-16"
        >
          {{ t("about.content") }}
        </p>
      </div>
      <div class="pt-16 pl-16 rtl:pl-32 pr-32 rtl:pr-16 pb-[70px]">
        <div class="grid grid-cols-3 gap-11">
          <card-box
            :title="t('about.card.one.title')"
            :content="t('about.card.one.content')"
            src="/images/home/card-icon-phone.svg"
          />
          <card-box
            :title="t('about.card.two.title')"
            :content="t('about.card.two.content')"
            src="/images/home/card-icon-node.svg"
          />
          <card-box
            :title="t('about.card.three.title')"
            :content="t('about.card.three.content')"
            src="/images/home/card-icon-user.svg"
          />
        </div>
        <div class="grid grid-cols-2 gap-6 pt-6">
          <card-box
            :title="t('about.card.four.title')"
            :content="t('about.card.four.content')"
            src="/images/home/card-icon-phone.svg"
          />
          <card-box
            :title="t('about.card.five.title')"
            :content="t('about.card.five.content')"
            src="/images/home/card-icon-phone.svg"
          />
        </div>
      </div>
    </div>
  </div>
</template>
<style></style>
