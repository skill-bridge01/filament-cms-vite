<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { useI18n } from "vue-i18n";
import { initFlowbite } from "flowbite";
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
  initFlowbite();
  window.addEventListener("resize", updateItemsToShow);
});

onUnmounted(() => {
  window.removeEventListener("resize", updateItemsToShow);
});

const { t, locale } = useI18n();
</script>
<template>
  <div class="max-w-[1440px] mx-auto px-16">
    <div class="pt-36">
      <div class="relative">
        <p
          class="absolute ltr:left-8 rtl:right-8 top-[3px] text-2xl font-bold text-[#45315D] z-10"
        >
          {{ t("faq.title") }}
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
      <router-link to="/faq">
        <p class="text-[#45315D] font-semibold text-base text-end underline">
          {{ t("home.ourServices.viewAll") }}
        </p>
      </router-link>
    </div>
    <div class="pt-8">
      <div id="accordion-collapse" data-accordion="collapse">
        <div class="bg-[#FCFCFC] border-[1px] border-[#EEEEEE] my-4 rounded-md">
          <h2 id="accordion-collapse-heading-1">
            <button
              type="button"
              class="flex items-center justify-between w-full pl-5 rtl:pl-8 py-5 rtl:pr-5 pr-8 font-semibold text-[20px] rtl:text-right focus:text-white text-[#45315D] hover:text-white focus:bg-[#45315D] rounded-md hover:bg-[#45315D] gap-3"
              data-accordion-target="#accordion-collapse-body-1"
              aria-expanded="false"
              aria-controls="accordion-collapse-body-1"
            >
              <span>{{ t("faq.accordionOne.title") }}</span>
              <svg
                data-accordion-icon
                class="w-3 h-3 rotate-180 shrink-0"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div
            id="accordion-collapse-body-1"
            class="hidden"
            aria-labelledby="accordion-collapse-heading-1"
          >
            <div class="p-5">
              <p class="mb-2 text-[#13414D] text-[18px] font-normal text-start">
                {{ t("faq.accordionOne.content") }}
              </p>
            </div>
          </div>
        </div>

        <!-- accordion2 -->
        <div class="bg-[#FCFCFC] border-[1px] border-[#EEEEEE] my-4 rounded-md">
          <h2 id="accordion-collapse-heading-2">
            <button
              type="button"
              class="flex items-center justify-between w-full pl-5 rtl:pl-8 py-5 rtl:pr-5 pr-8 font-semibold text-[20px] rtl:text-right focus:text-white text-[#45315D] hover:text-white focus:bg-[#45315D] rounded-md hover:bg-[#45315D] gap-3"
              data-accordion-target="#accordion-collapse-body-2"
              aria-expanded="false"
              aria-controls="accordion-collapse-body-2"
            >
              <span>{{ t("faq.accordionOne.title") }}</span>
              <svg
                data-accordion-icon
                class="w-3 h-3 rotate-180 shrink-0"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div
            id="accordion-collapse-body-2"
            class="hidden"
            aria-labelledby="accordion-collapse-heading-2"
          >
            <div class="p-5">
              <p class="mb-2 text-[#13414D] text-[18px] font-normal text-start">
                {{ t("faq.accordionOne.content") }}
              </p>
            </div>
          </div>
        </div>

        <!-- accordion3 -->
        <div class="bg-[#FCFCFC] border-[1px] border-[#EEEEEE] my-4 rounded-md">
          <h2 id="accordion-collapse-heading-3">
            <button
              type="button"
              class="flex items-center justify-between w-full pl-5 rtl:pl-8 py-5 rtl:pr-5 pr-8 font-semibold text-[20px] rtl:text-right focus:text-white text-[#45315D] hover:text-white focus:bg-[#45315D] rounded-md hover:bg-[#45315D] gap-3"
              data-accordion-target="#accordion-collapse-body-3"
              aria-expanded="false"
              aria-controls="accordion-collapse-body-3"
            >
              <span>{{ t("faq.accordionOne.title") }}</span>
              <svg
                data-accordion-icon
                class="w-3 h-3 rotate-180 shrink-0"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div
            id="accordion-collapse-body-3"
            class="hidden"
            aria-labelledby="accordion-collapse-heading-3"
          >
            <div class="p-5">
              <p class="mb-2 text-[#13414D] text-[18px] font-normal text-start">
                {{ t("faq.accordionOne.content") }}
              </p>
            </div>
          </div>
        </div>

        <!-- accordion4 -->
        <div class="bg-[#FCFCFC] border-[1px] border-[#EEEEEE] my-4 rounded-md">
          <h2 id="accordion-collapse-heading-4">
            <button
              type="button"
              class="flex items-center justify-between w-full pl-5 rtl:pl-8 py-5 rtl:pr-5 pr-8 font-semibold text-[20px] rtl:text-right focus:text-white text-[#45315D] hover:text-white focus:bg-[#45315D] rounded-md hover:bg-[#45315D] gap-3"
              data-accordion-target="#accordion-collapse-body-4"
              aria-expanded="false"
              aria-controls="accordion-collapse-body-4"
            >
              <span>{{ t("faq.accordionOne.title") }}</span>
              <svg
                data-accordion-icon
                class="w-3 h-3 rotate-180 shrink-0"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div
            id="accordion-collapse-body-4"
            class="hidden"
            aria-labelledby="accordion-collapse-heading-4"
          >
            <div class="p-5">
              <p class="mb-2 text-[#13414D] text-[18px] font-normal text-start">
                {{ t("faq.accordionOne.content") }}
              </p>
            </div>
          </div>
        </div>

        <!-- accordion5 -->
        <div class="bg-[#FCFCFC] border-[1px] border-[#EEEEEE] my-4 rounded-md">
          <h2 id="accordion-collapse-heading-5">
            <button
              type="button"
              class="flex items-center justify-between w-full pl-5 rtl:pl-8 py-5 rtl:pr-5 pr-8 font-semibold text-[20px] rtl:text-right focus:text-white text-[#45315D] hover:text-white focus:bg-[#45315D] rounded-md hover:bg-[#45315D] gap-3"
              data-accordion-target="#accordion-collapse-body-5"
              aria-expanded="false"
              aria-controls="accordion-collapse-body-5"
            >
              <span>{{ t("faq.accordionOne.title") }}</span>
              <svg
                data-accordion-icon
                class="w-3 h-3 rotate-180 shrink-0"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div
            id="accordion-collapse-body-5"
            class="hidden"
            aria-labelledby="accordion-collapse-heading-5"
          >
            <div class="p-5">
              <p class="mb-2 text-[#13414D] text-[18px] font-normal text-start">
                {{ t("faq.accordionOne.content") }}
              </p>
            </div>
          </div>
        </div>
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
