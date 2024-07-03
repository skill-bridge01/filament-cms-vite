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
  date: {
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
  <div class="rounded-normal shadow-article flex gap-[10px] items-center">
    <img :src="props.src" />
    <div class="flex flex-col gap-3 text-start">
      <p class="text-[#313131] text-sm font-normal">{{ props.title }}</p>
      <p class="text-[#494848] text-sm font-light">
        31&nbsp;{{ props.date }}&nbsp;2024
      </p>
    </div>
  </div>
</template>
