<script setup>
const props = defineProps({
  title: {
    type: String,
    default: "",
  },
  content: {
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
  <div class="text-start pt-5 pb-12 pr-12 rtl:pr-8 pl-8 rtl:pl-12">
    <img class="pb-3" :src="props.src" />

    <p class="text-[#45315D] text-base font-bold pb-3">
      {{ props.title }}
    </p>
    <p class="text-[#858585] text-sm font-semibold">
      {{ props.content }}
    </p>
  </div>
</template>
