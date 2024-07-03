<script setup>
import { onMounted, ref, watch, watchEffect, computed } from "vue";
import { useI18n } from "vue-i18n";
const LOCALES = [
  {
    label: "EN",
    value: "en",
  },
  {
    label: "AR",
    value: "ar",
  },
];
const { t, locale } = useI18n();
const selectedLocale = ref(locale.value);
watchEffect(() => {
  locale.value = LOCALES.find((l) => l.value === selectedLocale.value).value;
});

console.log("local", locale.value);
</script>
<template>
  <main>
    <div class="max-w-[1440px] mx-auto px-5">
      <div class="pt-7 flex gap-0 justify-center">
        <div
          :class="[
            'bg-[#9367C7] xl:px-11 px-5 flex items-center',
            locale === 'en'
              ? 'rounded-tl-[26px] rounded-bl-[26px]'
              : 'rounded-tr-[26px] rounded-br-[26px]',
          ]"
        >
          <img class="" src="/images/logo.svg" alt="" />
        </div>
        <div
          :class="[
            'xl:px-20 px-10 py-5 flex justify-center items-center xl:gap-14 gap-10 bg-[#45315D]  text-[#E2E2E2] text-base',
            locale === 'en'
              ? 'rounded-tr-[26px] rounded-br-[26px]'
              : 'rounded-tl-[26px] rounded-bl-[26px]',
          ]"
        >
          <router-link to="/home" active-class="active" exact>{{
            t("header.home")
          }}</router-link>
          <router-link to="/services" active-class="active">{{
            t("header.service")
          }}</router-link>
          <router-link to="/library" active-class="active">{{
            t("header.resource")
          }}</router-link>
          <router-link to="/articles" active-class="active">{{
            t("header.articles")
          }}</router-link>
          <router-link to="/faq" active-class="active">{{
            t("header.faq")
          }}</router-link>
          <router-link to="/about" active-class="active">{{
            t("header.aboutUs")
          }}</router-link>
          <router-link to="/contact" active-class="active">{{
            t("header.contactUs")
          }}</router-link>
        </div>
        <select
          v-model="selectedLocale"
          class="border-none outline-none focus:outline-none"
        >
          <option v-for="l in LOCALES" :value="l.value">{{ l.label }}</option>
        </select>
      </div>
    </div>
  </main>
</template>
<style>

</style>
