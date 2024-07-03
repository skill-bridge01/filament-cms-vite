<script setup>
import { useI18n } from "vue-i18n";
import FullCard from "@/components/articles/FullCard.vue";
import MiniCard from "@/components/articles/MiniCard.vue";

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
    <div class="pt-16 pb-16">
      <div class="grid grid-cols-4 gap-7">
        <full-card
          class="col-span-3"
          :title="t('articles.fullArticle.title')"
          :writer="t('articles.fullArticle.writer')"
          :time="t('articles.fullArticle.time')"
          :content1="t('articles.fullArticle.content1')"
          :content2="t('articles.fullArticle.content2')"
          :content3="t('articles.fullArticle.content3')"
          src="/images/articles/full/full.svg"
          avatar="/images/articles/full/avatar.png"
        />
        <div>
          <p class="pb-3 text-start">{{ t("articles.fullArticle.similar") }}</p>
          <div class="flex flex-col gap-5">
            <mini-card
              class=""
              :title="t('articles.fullArticle.similar')"
              :date="t('articles.fullArticle.date')"
              src="/images/articles/full/1.svg"
            />
            <mini-card
              class=""
              :title="t('articles.fullArticle.similar')"
              :date="t('articles.fullArticle.date')"
              src="/images/articles/full/2.svg"
            />
            <mini-card
              class=""
              :title="t('articles.fullArticle.similar')"
              :date="t('articles.fullArticle.date')"
              src="/images/articles/full/3.svg"
            />
            <mini-card
              class=""
              :title="t('articles.fullArticle.similar')"
              :date="t('articles.fullArticle.date')"
              src="/images/articles/full/4.svg"
            />
          </div>
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
