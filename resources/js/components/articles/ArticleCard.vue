<script setup>
import { useI18n } from "vue-i18n";
import { useDetailStore } from "@/store/detail";
import router from "@/router";
import { storeToRefs } from "pinia";
const { t, locale } = useI18n();
const libraryStore = useDetailStore();
const { librarys, selectedLibrary, loading } = storeToRefs(useDetailStore());
const handleClickDetails = (library) => {
  //   console.log("library", library);
  libraryStore.setSelectedLibrary(library);
  router.push("/articles/full");
};
const props = defineProps({
  title: {
    type: String,
    default: "",
  },
  content: {
    type: String,
    default: "",
  },
  date: {
    type: String,
    default: "",
  },
  view: {
    type: String,
    default: "",
  },
  like: {
    type: String,
    default: "",
  },
  fullArticle: {
    type: String,
    default: "",
  },
  src: {
    type: String,
    default: "",
  },
});
</script>
<template>
  <div class="rounded-normal shadow-article">
    <img :src="props.src" />
    <div class="px-3 pt-1 pb-8 text-start">
      <div class="flex justify-between pb-3">
        <p class="text-[#9367C7] text-sm font-bold">
          {{ props.title }}
        </p>
        <p class="text-[#313131] text-xs font-light">{{ props.date }}</p>
      </div>

      <p class="text-[#313131] text-[11px] font-normal pb-3">
        {{ props.content }}
      </p>
      <p
        @click="() => handleClickDetails(props)"
        class="text-[#FF2400] text-sm font-bold underline cursor-pointer pb-6"
      >
        {{ t("articles.card.fullArticle") }}
      </p>
      <div class="flex gap-5">
        <div class="flex gap-1">
          <img src="/images/articles/view.svg" />
          {{ t("articles.card.view") }}
        </div>
        <div class="flex gap-1">
          <img src="/images/articles/like.svg" />
          {{ t("articles.card.like") }}
        </div>
      </div>
    </div>
  </div>
</template>
