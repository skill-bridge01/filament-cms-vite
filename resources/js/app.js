import { createApp } from "vue";
import { createI18n } from "vue-i18n";
import en from "./locales/en.json";
import ar from "./locales/ar.json";
import VueAwesomePaginate from "vue-awesome-paginate";
import "vue-awesome-paginate/dist/style.css";
import router from "./router";
import { createPinia } from "pinia";
import "./style.css";
import Page from "v-page";
import App from "./App.vue";

const pinia = createPinia();

const i18n = createI18n({
  locale: "ar",
  fallbackLocale: "en",
  messages: { en, ar },
  legacy: false,
});

createApp(App)
  .use(i18n)
  .use(pinia)
  .use(router)
  .use(Page, {
    // globally config options
  })
  .use(VueAwesomePaginate)
  .mount("#app");
