<script setup>
import { useI18n } from "vue-i18n";
import { useDetailStore } from "../store/detail";
import router from "../router";
import { storeToRefs } from "pinia";
const libraryStore = useDetailStore();
const { librarys, selectedLibrary, loading } = storeToRefs(useDetailStore());
const handleClickDetails = (library) => {
  console.log("library", library);
  libraryStore.setSelectedLibrary(library);
  router.push("/details");
};
const { t, locale } = useI18n();
const props = defineProps({
  title: {
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
  readMore: {
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
  <div
    class="text-start flex items-center gap-6 ltr:pr-8 rtl:pl-8 shadow-library rounded-normal"
  >
    <img :src="props.src" />
    <div>
      <div class="flex justify-between px-4 pb-7 items-center">
        <p class="text-[#45315D] text-lg font-bold">
          {{ props.title }}
        </p>
        <button class="bg-[#FF2400] rounded-[4px] h-[45px] w-[224px] flex justify-center items-center shadow-post">
          <img src="/images/library/arrow-up.svg" />
          <p class="text-white">{{ t("library.details.blogPost") }}</p>
        </button>
      </div>

      <p class="text-[#313131] text-sm font-normal pb-1">
        {{ props.content1 }}
      </p>
      <p class="text-[#313131] text-sm font-normal pb-1">
        {{ props.content1 }}
      </p>
      <p class="text-[#313131] text-sm font-normal pb-1">
        {{ props.content1 }}
      </p>
      <p class="text-[#313131] text-sm font-normal pb-1">
        {{ props.content1 }}
      </p>
      <p class="text-[#313131] text-sm font-normal pb-1">
        {{ props.content2 }}
      </p>
    </div>
  </div>
</template>
