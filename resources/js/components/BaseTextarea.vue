<script setup>
import { ref, toRef, toRefs, watch } from "vue";
import { useField } from "vee-validate";
import { useI18n } from "vue-i18n";
import * as yup from "yup";

// const date = ref(new Date());
const { t, locale } = useI18n();
const emits = defineEmits([]);
const props = defineProps({
  placeholder: {
    type: String,
    default: "",
  },
  disabled: {
    type: Boolean,
    default: false,
  },
  alt: String,
  iconSrc: String,
  inputType: {
    type: String,
    default: "text",
  },
  name: String,
  value: {
    type: String,
    default: "",
  },
  classes: {},
  clear: {
    type: Boolean,
    default: false,
  },
});
const date = ref(props.value);
const { clear } = toRefs(props);
// use `toRef` to create reactive references to `name` prop which is passed to `useField`
// this is important because vee-validte needs to know if the field name changes
// https://vee-validate.logaretm.com/v4/guide/composition-api/caveats
const name = toRef(props, "name");

// we don't provide any rules here because we are using form-level validation
// https://vee-validate.logaretm.com/v4/guide/validation#form-level-validation
const {
  value: inputValue,
  errorMessage,
  handleBlur,
  handleChange,
  meta,
} = useField(name, undefined, {
  initialValue: props.value,
});

watch(clear, (newValue, oldValue) => {
  if (newValue) {
    setDate("");
  }
});

// In case of a range picker, you'll receive [Date, Date]
const format = (date) => {
  if (date instanceof Date && !isNaN(date)) {
    const day = date.getDate();
    const month = date.getMonth() + 1;
    const year = date.getFullYear();

    return `${day}/${month}/${year}`;
  }
  return "";
};

const setDate = (value) => {
  date.value = value;
  inputValue.value = value;
};
</script>
<template>
  <div>
    <div
      class="flex items-center bg-[#F6F6F6] rounded-lg border pt-[18px] pb-[17px] m-0"
    >
      <div class="relative text-[#313131] font-normal search-bar flex w-full">
        <textarea
          class="text-xs border-none focus:outline-none text-start w-full px-4 "
          cols="50"
          rows="6"
          maxlength="270"
          :type="props.inputType"
          :name="props.name"
          :placeholder="props.placeholder"
          :value="inputValue"
          @input="handleChange"
          @blur="handleBlur"
          :disabled="props.disabled"
        />
      </div>
      <div>
        <img :alt="props.alt" :src="props.iconSrc" />
      </div>
    </div>
    <div class="flex justify-between px-2">
      <div
        :class="['text-start text-red-500', errorMessage == '' ? 'hidden' : '']"
      >
        <span class="text-xs font-readex font-light">{{ errorMessage }}</span>
      </div>
      <p class="text-[#313131] text-end">
        <span class="text-xs font-bold">{{ inputValue.length }}/270 </span
        ><span class="font-light">{{ t("contact.letter") }}</span>
      </p>
    </div>
    <div class="text-end pt-6">
      <button class="w-1/2 h-12 bg-[#6B6B6B] rounded-lg text-sm font-normal">
        {{ t("contact.sendNow") }}
      </button>
    </div>
  </div>
</template>
