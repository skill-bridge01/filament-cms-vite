<script setup>
import Header from "./Header.vue";
import Footer from "./Footer.vue";
import { useI18n } from "vue-i18n";
const { locale } = useI18n();
</script>
<template>
  <div class="bg-white" :dir="[locale === 'en' ? 'ltr' : 'rtl']">
    <Header />
    <div>
      <main>
        <div class="">
          <div>
            <router-view />
          </div>
          <Footer />
        </div>
      </main>
    </div>
  </div>
</template>
