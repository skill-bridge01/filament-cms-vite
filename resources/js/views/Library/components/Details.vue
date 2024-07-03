<script setup>
import { useDetailStore } from "../../../store/detail";
import { storeToRefs } from "pinia";
const libraryStore = useDetailStore();
const { librarys, selectedLibrary, loading } = storeToRefs(useDetailStore());
import { useI18n } from "vue-i18n";
import { ref, computed } from "vue";
import DetailCard from "@/components/DetailCard.vue";
import BlogCard from "@/components/BlogCard.vue";

const { t, locale } = useI18n();
</script>
<template>
  <div class="max-w-[1440px] mx-auto px-24">
    <div class="pt-12">
      <div class="relative">
        <p
          class="absolute ltr:left-8 rtl:right-8 top-[3px] text-2xl font-bold text-[#45315D] z-10"
        >
          {{ t("resourceLibrary.title") }}
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

    <div class="pt-20 flex flex-col gap-12">
      <detail-card
        :title="selectedLibrary.title"
        :content1="selectedLibrary.content1"
        :content2="selectedLibrary.content2"
        :readMore="selectedLibrary.readMore"
        :src="selectedLibrary.src"
      />
    </div>

    <p class="pt-11 pb-5 text-[#45315D] font-bold text-lg text-start">
      {{ t("library.details.suggestedBlog") }}
    </p>
    <div class="grid grid-cols-3 gap-10 pb-16">
      <blog-card
        :title="t('library.details.card.title')"
        :content="t('library.details.card.content')"
        :storyView="t('library.details.card.storyView')"
        src="/images/library/details/1.svg"
      />
      <blog-card
        :title="t('library.details.card.title')"
        :content="t('library.details.card.content')"
        :storyView="t('library.details.card.storyView')"
        src="/images/library/details/2.svg"
      />
      <blog-card
        :title="t('library.details.card.title')"
        :content="t('library.details.card.content')"
        :storyView="t('library.details.card.storyView')"
        src="/images/library/details/3.svg"
      />
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
