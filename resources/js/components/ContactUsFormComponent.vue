<template>
  <div>
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
    <form @submit.prevent="handleSubmit">
      <div class="row">
        <div class="form-group col-12">
          <input
            type="text"
            class="form-control"
            :class="
              nameIsValid
                ? 'is-valid'
                : nameIsValid === null
                ? ''
                : 'is-invalid'
            "
            placeholder="Your Name*"
            v-model="form.name"
            required
          />
        </div>
        <div class="form-group col-12">
          <input
            type="text"
            class="form-control"
            :class="
              businessNameIsValid
                ? 'is-valid'
                : businessNameIsValid === null
                ? ''
                : 'is-invalid'
            "
            placeholder="Your Business name"
            v-model="form.business_name"
          />
        </div>
        <div class="form-group col-12">
          <input
            type="tel"
            class="form-control"
            :class="
              phoneNumberIsValid
                ? 'is-valid'
                : phoneNumberIsValid === null
                ? ''
                : 'is-invalid'
            "
            placeholder="Your Phone Number*"
            v-model="form.phone"
          />
        </div>
        <div class="form-group col-12">
          <input
            type="email"
            class="form-control"
            :class="
              emailIsValid
                ? 'is-valid'
                : emailIsValid === null
                ? ''
                : 'is-invalid'
            "
            placeholder="Your Email*"
            v-model="form.email"
          />
        </div>
        <div class="form-group col-12">
          <textarea
            class="form-control message"
            placeholder="Brief comment about your enquiry"
            v-model="form.message"
            rows="5"
          ></textarea>
        </div>
        <div class="col-12">
          <button
            class="main-btn main-btn-3"
            :disabled="!isValid || isSubmitting"
          >
            Send <i class="fal fa-plus text-light" v-if="!isSubmitting"></i>
            <i class="fal fa-circle-notch fa-spin text-light" v-else></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import { ref, reactive, computed } from "vue";
import Validation from "../modules/Validation.js";
import axios from "axios";

export default {
  setup() {
    const { name, email, alphanumeric, phoneNumber } = Validation();

    const form = reactive({
      name: "",
      business_name: "",
      phone: "",
      email: "",
      message: "",
    });
    const success_message = ref("");

    const isSubmitting = ref(false);

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

    const isValid = computed(() => {
      return (
        nameIsValid.value && emailIsValid.value && phoneNumberIsValid.value
      );
    });

    const formReset = () => {
      form.name = "";
      form.business_name = "";
      form.phone = "";
      form.email = "";
      form.message = "";
    };

    const handleSubmit = () => {
      success_message.value = "";
      if (nameIsValid) {
        isSubmitting.value = true;
        axios
          .post("contact", form)
          .then((res) => {
            console.log(res);
            success_message.value = res.data.message;
            formReset();
          })
          .catch((err) => {
            console.error(err.response);
          })
          .finally(() => {
            isSubmitting.value = false;
          });
      } else {
        alert("Invalid Submittion. Please try again!");
      }
    };

    return {
      form,
      success_message,
      isSubmitting,
      isValid,
      nameIsValid,
      emailIsValid,
      businessNameIsValid,
      phoneNumberIsValid,
      handleSubmit,
    };
  },
};
</script>
<style scoped>
.message {
  resize: none !important;
}
</style>
