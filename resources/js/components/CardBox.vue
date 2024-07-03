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
  <div
    class="h-full flex pl-7 pr-0 rtl:pl-0 rtl:pr-7 items-center shadow-4xl rounded-[10px] w-full mx-auto"
  >
    <img :src="props.src" />
    <div class="p-6 flex flex-col justify-center">
      <p class="text-[#FF2400] text-sm font-semibold pb-4">
        {{ props.title }}
      </p>
      <p class="text-[#858585] text-xs font-normal">
        {{ props.content }}
      </p>
    </div>
  </div>
</template>
