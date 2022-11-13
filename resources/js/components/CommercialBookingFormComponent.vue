<template>
  <div>
    <form
      style="background-image: url('images/app-form-bg.jpg')"
      @submit.prevent="handleFormSubmit"
    >
      <div
        class="alert alert-success alert-dismissible fade show"
        role="alert"
        v-if="success_message.length > 0"
      >
        {{ success_message }}
        <button
          type="button"
          class="close"
          data-dismiss="alert"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="input-group mb-15">
        <input
          type="text"
          placeholder="Your Name*"
          v-model="form.name"
          :class="[
            nameIsValid
              ? 'input-valid'
              : nameIsValid === null
              ? ''
              : 'input-invalid',
          ]"
          required
        />
        <span class="icon"><i class="far fa-user-edit"></i></span>
      </div>
      <div class="input-group mb-15">
        <input
          type="text"
          placeholder="Your Business Name"
          :class="[
            businessNameIsValid
              ? 'input-valid'
              : businessNameIsValid === null
              ? ''
              : 'input-invalid',
          ]"
          v-model="form.business_name"
        />
        <span class="icon"><i class="far fa-building"></i></span>
      </div>
      <div class="input-group mb-15">
        <input
          type="tel"
          placeholder="Your Phone Number*"
          v-model="form.phone"
          :class="[
            phoneNumberIsValid
              ? 'input-valid'
              : phoneNumberIsValid === null
              ? ''
              : 'input-invalid',
          ]"
          required
        />
        <span class="icon"><i class="far fa-phone"></i></span>
      </div>
      <div class="input-group mb-15">
        <input
          type="text"
          placeholder="Your Email Address*"
          v-model="form.email"
          :class="[
            emailIsValid
              ? 'input-valid'
              : emailIsValid === null
              ? ''
              : 'input-invalid',
          ]"
          required
        />
        <span class="icon"><i class="far fa-envelope-open"></i></span>
      </div>
      <div class="input-group mb-15">
        <textarea
          v-model="form.message"
          placeholder="Brief comment about your enquiry"
        ></textarea>
      </div>
      <button
        class="main-btn main-btn-3"
        type="submit"
        :disabled="!isValid || isSubmitting"
      >
        Send
        <i class="fal fa-plus text-light" v-if="!isSubmitting"></i>
        <li class="fal fa-circle-notch fa-spin text-light" v-else></li>
      </button>
    </form>
  </div>
</template>

<script>
import axios from "axios";
import { ref, reactive, computed } from "vue";
import Validation from "../modules/Validation.js";

export default {
  setup() {
    const isSubmitting = ref(false);
    const { name, alphanumeric, email, phoneNumber } = new Validation();

    const form = reactive({
      name: "",
      business_name: "",
      phone: "",
      email: "",
      message: "",
    });
    const success_message = ref("");

    const handleFormSubmit = () => {
      isSubmitting.value = true;
      success_message.value = "";
      axios
        .post("/booking", form)
        .then((res) => {
          success_message.value = res.data.message;
          resetForm();
        })
        .catch((err) => {
          console.error(err);
        })
        .finally(() => {
          isSubmitting.value = false;
        });
    };

    const resetForm = () => {
      form.name = "";
      form.business_name = "";
      form.phone = "";
      form.email = "";
      form.message = "";
    };

    const isValid = computed(() => {
      return (
        form.name.length > 0 &&
        form.phone.length > 0 &&
        form.email.length > 0 &&
        name(form.name) &&
        phoneNumber(form.phone) &&
        email(form.email) &&
        (form.business_name.length > 0 ? name(form.business_name) : true)
      );
    });

    const nameIsValid = computed(() => {
      return form.name.length > 0 ? name(form.name) : null;
    });

    const emailIsValid = computed(() => {
      return form.email.length > 0 ? email(form.email) : null;
    });

    const businessNameIsValid = computed(() => {
      return form.business_name.length > 0
        ? alphanumeric(form.business_name)
        : null;
    });

    const phoneNumberIsValid = computed(() => {
      return form.phone.length > 0 ? phoneNumber(form.phone) : null;
    });

    return {
      form,
      success_message,
      handleFormSubmit,
      isSubmitting,
      isValid,
      nameIsValid,
      emailIsValid,
      businessNameIsValid,
      phoneNumberIsValid,
    };
  },
};
</script>

<style>
.input-valid {
  border: 1px solid #28a745 !important;
}

.input-invalid {
  border: 1px solid #f80643 !important;
}
</style>
