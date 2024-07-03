<script setup>
import { useI18n } from "vue-i18n";
import { useDetailStore } from "@/store/detail";
import { storeToRefs } from "pinia";
const { t, locale } = useI18n();
const libraryStore = useDetailStore();
const { librarys, selectedLibrary, loading } = storeToRefs(useDetailStore());
const handleClickDetails = (library) => {
  //   console.log("library", library);
  libraryStore.setSelectedLibrary(library);
  router.push("/details");
};
const props = defineProps({
  title: {
    type: String,
    default: "",
  },
  writer: {
    type: String,
    default: "",
  },
  time: {
    type: String,
    default: "",
  },
  content1: {
    type: String,
    default: "",
  },
  content2: {
    type: String,
    default: "",
  },
  content3: {
    type: String,
    default: "",
  },
  src: {
    type: String,
    default: "",
  },
  avatar: {
    type: String,
    default: "",
  },
});
</script>
<template>
  <div class="rounded-normal shadow-fullArticle">
    <img :src="props.src" />
    <div class="px-3 pt-3 pb-3 text-start">
      <div class="flex gap-[14px] pb-2">
        <img :src="props.avatar" />
        <div class="flex flex-col gap-6">
          <p class="text-[#45315D] text-base font-bold">
            {{ props.title }}
          </p>
          <div class="flex gap-3 items-center">
            <p class="text-xs font-bold text-[#313131]">
              {{ t("articles.fullArticle.by") }}
            </p>
            <p class="text-xs font-normal text-[#313131]">
              {{ t("articles.fullArticle.writer") }}
            </p>
            <span class="text-[#C6C6C6]">|</span>
            <p class="text-[#C6C6C6] text-xs font-normal">
              {{ t("articles.fullArticle.time") }}
            </p>
          </div>
        </div>
      </div>

      <div class="flex gap-4 pb-2">
        <button class="px-6 py-2 bg-[#F6F6F6] rounded-2xl">
          {{ t("articles.fullArticle.clear") }}
        </button>
        <button class="px-[14px] py-2 bg-[#F6F6F6] rounded-2xl">
          {{ t("articles.fullArticle.stories") }}
        </button>
        <button class="px-4 py-2 bg-[#F6F6F6] rounded-2xl">
          {{ t("articles.fullArticle.blog") }}
        </button>
      </div>

      <p class="text-[#313131] text-base font-normal pb-6 px-1">
        {{ props.content1 }}
      </p>
      <div class="flex gap-4 pb-3">
        <img src="/images/articles/full/arrow-l.svg" />
        <p>{{ props.content2 }}</p>
      </div>
      <div class="flex gap-4 pb-3">
        <img src="/images/articles/full/arrow-l.svg" />
        <p>{{ props.content2 }}</p>
      </div>
      <div class="flex gap-4 pb-3">
        <img src="/images/articles/full/arrow-l.svg" />
        <p>{{ props.content2 }}</p>
      </div>
      <p class="text-[#313131] text-base font-normal pb-10 px-1">
        {{ props.content3 }}
      </p>

      <div class="flex justify-between">
        <div class="flex gap-5">
          <div
            class="py-2 px-6 bg-[#F6F6F6] flex gap-2 justify-center rounded-lg"
          >
            <img src="/images/articles/full/save.svg" />
            <p class="text-[#313131] text-xs font-normal">
              {{ t("articles.fullArticle.save") }}
            </p>
          </div>
          <div
            class="py-2 px-6 bg-[#F6F6F6] flex gap-2 justify-center rounded-lg"
          >
            <img src="/images/articles/full/like.svg" />
            <p class="text-[#313131] text-xs font-normal">
              {{ t("articles.card.like") }}
            </p>
          </div>
        </div>
        <div class="flex gap-[10px]">
          <img src="/images/articles/full/facebook.svg" />
          <img src="/images/articles/full/twitter.svg" />
          <img src="/images/articles/full/instagram.svg" />
          <img src="/images/articles/full/youtube.svg" />
        </div>
      </div>

      <!-- <p
        @click="() => handleClickDetails(props)"
        class="text-[#FF2400] text-sm font-bold underline cursor-pointer pb-6"
      >
        {{ t("articles.card.fullArticle") }}
      </p> -->
    </div>
  </div>
</template>
