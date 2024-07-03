<script setup>
import { useDetailStore } from "../store/detail";
import router from "../router";
import { storeToRefs } from "pinia";
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
  content: {
    type: String,
    default: "",
  },
  storyView: {
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
  <div class="p-5 border-[1px] border-[#C6C6C6] rounded-normal">
    <img :src="props.src" />
    <div class="px-1 pt-[6px] text-start">
      <p class="text-[#333333] text-base font-semibold pb-5">
        {{ props.title }}
      </p>
      <p class="text-[#313131] text-xs font-normal pb-5">
        {{ props.content }}
      </p>
      <p
        @click="() => handleClickDetails(props)"
        class="text-[#FF2400] text-sm font-semibold underline cursor-pointer"
      >
        {{ props.storyView }}
      </p>
    </div>
  </div>
</template>
