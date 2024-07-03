<script setup>
import { useI18n } from "vue-i18n";
import { ref, computed } from "vue";
import { Form } from "vee-validate";
import BaseInput from "@/components/BaseInput.vue";
import BaseTextarea from "@/components/BaseTextarea.vue";
import ContactCard from "@/components/ContactCard.vue";

import * as Yup from "yup";
const schema = Yup.object().shape({
  name: Yup.string().min(6).required(),
  email: Yup.string().email().required(),
  message: Yup.string().min(6).required(),
});
const contacts = ref([
  {
    id: 1,
    title: computed(() => t("contact.email.title")),
    info: "nevo.monia@gmail.com",
    src: "/images/contact/email2.png",
  },
  {
    id: 2,
    title: computed(() => t("contact.phone")),
    info: "+972 599968870",
    src: "/images/contact/phone2.png",
  },
  {
    id: 3,
    title: computed(() => t("contact.hour.title")),
    info: computed(() => t("contact.hour.info")),
    src: "/images/contact/hour2.png",
  },
]);

const { t, locale } = useI18n();
</script>
<template>
  <div class="max-w-[1440px] mx-auto">
    <div class="pt-12 px-24">
      <div class="relative">
        <p
          class="absolute ltr:left-8 rtl:right-8 top-[3px] text-2xl font-bold text-[#45315D] z-10"
        >
          {{ t("contact.title") }}
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

    <div class="pt-16 px-24">
      <div class="relative text-center group block">
        <img src="/images/contact/main.svg" class="object-cover w-full" />
        <div
          class="absolute bottom-0 left-0 right-0 top-0"
          style="
            border-radius: 20px;
            opacity: 1;
            background: rgba(69, 49, 93, 0.4902);
          "
        ></div>
        <div class="bottom w-full">
          <div class="grid grid-cols-3 gap-10">
            <div v-for="contact in contacts" :key="contact.id">
              <contact-card
                :src="contact.src"
                :title="contact.title"
                :info="contact.info"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-60 relative mx-10 hidden">
      <img
        class="absolute ltr:left-0 rtl:right-0 top-12 z-0"
        :src="[
          locale === 'en'
            ? '/images/home/contact-envelope-l.svg'
            : '/images/home/contact-envelope-r.svg',
        ]"
      />
      <img
        class="absolute ltr:right-0 rtl:left-0 top-12"
        :src="[
          locale === 'en'
            ? '/images/home/contact-message-l.svg'
            : '/images/home/contact-message-r.svg',
        ]"
      />
    </div>
    <div
      :class="
        'mt-60 ' +
        (locale === 'en' ? 'envelop-en-left-bg' : 'envelop-ar-right-bg')
      "
    >
      <div class="px-24">
        <div class="text-start">
          <p class="text-xl font-bold text-[#45315D] pb-2">
            {{ t("contact.stayInTouch") }}
          </p>
          <p class="text-[#6E6E6E] text-lg font-normal">
            {{ t("contact.sample") }}
          </p>
        </div>
      </div>
      <div class="pt-10 px-24 pb-24">
        <div class="grid grid-cols-2 gap-10 items-center">
          <Form
            class="bg-white text-start shadow-form rounded-[10px] pt-[52px] pb-11 px-10"
            @submit=""
            :validation-schema="schema"
          >
            <p class="text-3xl text-[#313131] font-bold pl-1 rtl:pr-1 pb-4">
              {{ t("contact.formTitle") }}
            </p>
            <div class="pb-6">
              <p class="px-4 pb-[6px]">
                <span class="text-[#313131] text-xs font-bold">{{
                  t("contact.name.title")
                }}</span
                ><span class="text-[#FF0000] text-sm">*</span>
              </p>
              <base-input
                input-type="text"
                name="name"
                :placeholder="t('contact.name.placeholder')"
                class="w-full font-readex text-base font-light"
              />
            </div>
            <div class="pb-6">
              <p class="px-4 pb-[6px]">
                <span class="text-[#313131] text-xs font-bold">{{
                  t("contact.email.title")
                }}</span
                ><span class="text-[#FF0000] text-sm">*</span>
              </p>
              <base-input
                input-type="email"
                name="email"
                :placeholder="t('contact.email.placeholder')"
                class="w-full font-readex text-base font-light"
              />
            </div>
            <div class="">
              <p class="px-4 pb-[6px]">
                <span class="text-[#313131] text-xs font-bold">{{
                  t("contact.message.title")
                }}</span
                ><span class="text-[#FF0000] text-sm">*</span>
              </p>
              <base-textarea
                input-type="text"
                name="message"
                :placeholder="t('contact.message.placeholder')"
                class="w-full font-readex text-base font-light"
              />
            </div>
          </Form>
          <img
            :src="[
              locale === 'en'
                ? '/images/home/contact-l.svg'
                : '/images/home/contact-r.svg',
            ]"
          />
        </div>
      </div>
    </div>
  </div>
</template>
<style>
.bottom {
  position: absolute;
  top: 110%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.envelop-ar-right-bg {
  background-image: url("/images/home/contact-envelope-r.svg"),
    url("/images/home/contact-message-r.svg");
  background-repeat: no-repeat;
  background-position: right 30px  top 40px, left 30px top 40px;
}
.envelop-en-left-bg {
  background-image: url("/images/home/contact-envelope-l.svg"),
    url("/images/home/contact-message-l.svg");
  background-repeat: no-repeat;
  background-position: left 30px top 40px, right 30px top 40px;
}
</style>
