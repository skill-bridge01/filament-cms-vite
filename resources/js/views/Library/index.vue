<script setup>
import { useI18n } from "vue-i18n";
import { ref, computed } from "vue";
import LibraryCard from "@/components/LibraryCard.vue";
import "vue3-carousel/dist/carousel.css";
const currentPage = ref(1);

const librarys = ref([
  {
    id: 1,
    title: computed(() => t("library.title")),
    content1: computed(() => t("library.content1")),
    content2: computed(() => t("library.content2")),
    readMore: computed(() => t("library.readMore")),
    src: "/images/library/1.svg",
  },
  {
    id: 2,
    title: computed(() => t("library.title")),
    content1: computed(() => t("library.content1")),
    content2: computed(() => t("library.content2")),
    readMore: computed(() => t("library.readMore")),
    src: "/images/library/2.svg",
  },
  {
    id: 3,
    title: computed(() => t("library.title")),
    content1: computed(() => t("library.content1")),
    content2: computed(() => t("library.content2")),
    readMore: computed(() => t("library.readMore")),
    src: "/images/library/3.svg",
  },
  {
    id: 4,
    title: computed(() => t("library.title")),
    content1: computed(() => t("library.content1")),
    content2: computed(() => t("library.content2")),
    readMore: computed(() => t("library.readMore")),
    src: "/images/library/4.svg",
  },
  {
    id: 5,
    title: computed(() => t("library.title")),
    content1: computed(() => t("library.content1")),
    content2: computed(() => t("library.content2")),
    readMore: computed(() => t("library.readMore")),
    src: "/images/library/1.svg",
  },
  {
    id: 6,
    title: computed(() => t("library.title")),
    content1: computed(() => t("library.content1")),
    content2: computed(() => t("library.content2")),
    readMore: computed(() => t("library.readMore")),
    src: "/images/library/2.svg",
  },
]);

const change = (pageState) => {
  console.log("page", pageState);
  currentPage.value = pageState;
};

const itemsPaginated = computed(() =>
  librarys.value.slice(5 * (currentPage.value - 1), 5 * currentPage.value)
);

const { t, locale } = useI18n();
</script>
<template>
  <div class="max-w-[1440px] mx-auto px-24">
    <div class="pt-12">
      <div class="relative">
        <p
          class="absolute ltr:left-8 rtl:right-8 top-[3px] text-2xl font-bold text-[#45315D] z-10"
        >
          {{ t("resourceLibrary.title") }}
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
    </div>

    <div class="pt-20 flex flex-col gap-12">
      <div v-for="library in itemsPaginated" :key="library.id">
        <library-card
          :title="library.title"
          :content1="library.content1"
          :content2="library.content2"
          :readMore="library.readMore"
          :src="library.src"
        />
      </div>
    </div>
  </div>
  <div class="example-six mt-20 mb-3">
    <vue-awesome-paginate
      :total-items="librarys.length"
      v-model="currentPage"
      :items-per-page="5"
      :max-pages-shown="5"
      @click="change"
      :show-breakpoint-buttons="false"
      :hide-prev-next-when-ends="true"
    >
      <template #prev-button>
        <span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="black"
            width="12"
            height="12"
            viewBox="0 0 24 24"
            :style="[
              locale === 'en'
                ? 'transform: rotate(180deg) translateY(-2px);'
                : 'transform: translateY(px);',
            ]"
          >
            <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z" />
          </svg>
        </span>
      </template>

      <template #next-button>
        <span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="black"
            width="12"
            height="12"
            viewBox="0 0 24 24"
            :style="[
              locale === 'en'
                ? 'transform: translateY(px);'
                : 'transform: rotate(180deg) translateY(-2px);',
            ]"
          >
            <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z" />
          </svg>
        </span>
      </template>
    </vue-awesome-paginate>
  </div>
</template>
<style>
.react-circle-l {
  background-image: linear-gradient(to right, #ff9280, #ff2400);
}
.react-circle-r {
  background-image: linear-gradient(to right, #ff2400, #ff9280);
}

.example-six .pagination-container {
  column-gap: 10px;
  align-items: center;
}
.example-six .paginate-buttons {
  height: 35px;
  width: 35px;
  cursor: pointer;
  border-radius: 4px;
  background-color: transparent;
  border: none;
  /* color: black; */
}

.example-six .back-button,
.example-six .next-button {
  /* background-color: rgb(85, 85, 85); */
  color: rgb(172, 39, 39);
  border-radius: 8px;
  height: 45px;
  width: 45px;
  z-index: 10;
}
.example-six .active-page {
  background-color: #e5e5e5;
}
.example-six .paginate-buttons:hover {
  background-color: #f5f5f5;
}
.example-six .active-page:hover {
  background-color: #e5e5e5;
}
/* .example-six .back-button svg {
  transform: rotate(180deg) translateY(-2px);
} */

/* .example-six .next-button svg {
  transform: translateY(px);
} */

.example-six .back-button span {
  text-align: -webkit-center;
}
.example-six .next-button span {
  text-align: -webkit-center;
}

.example-six .back-button:hover,
.example-six .next-button:hover {
  background-color: rgb(45, 45, 45);
}

.example-six .back-button:active,
.example-six .next-button:active {
  background-color: rgb(85, 85, 85);
}
</style>
