<template>
  <div>
    <form @submit.prevent="handleSubmit">
      <div class="row">
        <div class="col-lg-5">
          <input
            type="email"
            placeholder="Enter Your Email Address"
            v-model="form.email"
          />
        </div>
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6">
              <input
                type="text"
                placeholder="Enter Your Name"
                v-model="form.name"
              />
            </div>
            <div class="col-lg-6">
              <button
                class="subscribe-now-btn"
                :disabled="!isValid || isSubmitting"
              >
                <span v-if="!submitSuccess">Subscribe Now</span>
                <span v-else>Subscribed</span>
                <i
                  class="fal fa-plus"
                  v-if="!isSubmitting && !submitSuccess"
                ></i>
                <i class="fal fa-check" v-else-if="submitSuccess"></i>
                <i class="fal fa-circle-notch fa-spin" v-else></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import axios from "axios";
import { reactive, ref, computed } from "vue";
import Validation from "../modules/Validation";

export default {
  setup() {
    const form = reactive({
      email: "",
      name: "",
    });
    const { name, email } = new Validation();

    const submitSuccess = ref(false);
    const isSubmitting = ref(false);
    const isValid = computed(() => {
      return (
        form.email.length > 0 &&
        form.name.length > 0 &&
        email(form.email) &&
        name(form.name)
      );
    });

    const resetForm = () => {
      form.email = "";
      form.name = "";
    };

    const handleSubmit = () => {
      submitSuccess.value = false;
      isSubmitting.value = true;
      axios
        .post("/subscribe", form)
        .then((res) => {
          resetForm();
          submitSuccess.value = true;
        })
        .catch((err) => {
          console.error(err);
          submitSuccess.value = false;
        })
        .finally(() => {
          isSubmitting.value = false;
        });
    };

    return {
      form,
      submitSuccess,
      isSubmitting,
      isValid,
      handleSubmit,
    };
  },
};
</script>

<style scoped>
.subscribe-now-btn:disabled {
  opacity: 0.8;
}
</style>
