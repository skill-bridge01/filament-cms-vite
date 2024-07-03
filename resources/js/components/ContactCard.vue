<script setup>
import { useI18n } from "vue-i18n";
const { t } = useI18n();
const props = defineProps({
  title: {
    type: String,
    default: "",
  },
  info: {
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
    class="bg-white shadow-4xl rounded-normal flex flex-col justify-center items-center h-full pb-7"
  >
    <img :src="props.src" class="scale-50" />
    <p class="text-xl text-[#45315D] font-semibold">{{ props.title }}</p>
    <p class="text-lg text-[#6E6E6E] font-normal">{{ props.info }}</p>
  </div>
</template>
