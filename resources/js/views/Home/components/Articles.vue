<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { useI18n } from "vue-i18n";
import { Carousel, Navigation, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
const itemsToShow = ref(2); // Default value

function updateItemsToShow() {
  const width = window.innerWidth;
  if (width >= 1280) {
    // Example breakpoint for "lg"
    itemsToShow.value = 2.5;
  } else {
    itemsToShow.value = 2.2;
  }
}

onMounted(() => {
  updateItemsToShow();
  window.addEventListener("resize", updateItemsToShow);
});

onUnmounted(() => {
  window.removeEventListener("resize", updateItemsToShow);
});
const slides = ref([
  {
    content: "Slide 1 Content",
    url: "/images/home/carousel2-1.svg",
    btn: "اللإطلاع على المدونة",
  },
  {
    content: "Slide 2 Content",
    url: "/images/home/carousel2-2.svg",
    btn: "اللإطلاع على المدونة",
  },
]);
const { t, locale } = useI18n();
</script>
<template>
  <div class="max-w-[1440px] mx-auto px-16">
    <div class="pt-36">
      <div class="relative">
        <p
          class="absolute ltr:left-8 rtl:right-8 text-2xl font-bold text-[#45315D] z-10 top-[3px]"
        >
          {{ t("articles.title") }}
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
      <router-link to="/articles">
        <p class="text-[#45315D] font-semibold text-base text-end underline">
          {{ t("home.ourServices.viewAll") }}
        </p>
      </router-link>
    </div>
    <div class="pt-8 flex gap-10">
      <p
        class="text-xl font-semibold text-[#313131] w-1/4 flex items-center text-start"
      >
        {{ t("articles.content") }}
      </p>
      <div class="w-3/4">
        <Carousel :itemsToShow="itemsToShow" :wrapAround="true">
          <Slide v-for="(slide, index) in slides" :key="index">
            <div class="shadow-4xl rounded-[10px]">
              <img class="px-6 pt-6" :src="slide.url" />
              <div class="text-start px-7">
                <div
                  class="flex rtl:flex-row-reverse rtl:text-end justify-between py-2"
                >
                  <p class="text-[#333333] text-sm font-semibold">
                    {{ t("articles.carouselTitle") }}
                  </p>
                  <div class="text-[#313131] text-xs font-normal">
                    <span>2024</span> <span>مايو </span> <span>31</span>
                  </div>
                </div>

                <p class="rtl:text-end text-xs font-normal text-[#858585] pb-3">
                  {{ t("articles.carouselContent") }}
                </p>
                <p
                  class="rtl:text-end text-sm font-semibold text-[#FF2400] underline pb-4"
                >
                  {{ t("articles.seeMore") }}
                </p>
                <!-- <p>{{ slide.content }}</p> -->
              </div>
            </div>
          </Slide>
          <!-- <template #addons>
            <Navigation />
          </template> -->
          <template #addons>
            <navigation>
              <template #next>
                <img
                  :class="[locale==='en'?'block':'hidden']"
                  src="/images/home/carousel-arrow-r.svg"
                />
              </template>
              <template #prev>
                <img
                  :class="[locale==='en'?'hidden':'block']"
                  src="/images/home/carousel-arrow-l.svg"
                />
              </template>
            </navigation>
          </template>
        </Carousel>
      </div>
    </div>
  </div>
</template>
<style>
.carousel__slide {
  padding: 8px;
}
@media (min-width: 1280px) {
  .carousel__slide {
    padding: 20px;
  }
}

.carousel__prev,
.carousel__next {
  padding: 20px;
  width: 80px;
  height: 80px;
}
</style>
