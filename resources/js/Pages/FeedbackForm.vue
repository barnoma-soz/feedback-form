<template>
  <h1 class="text-2xl font-semibold text-blue-700">Обратная связь</h1>
  <form @submit.prevent="submit()" class="border border-gray-300 rounded-lg p-6 mt-6 space-y-3">
    <FlashMessages />

    <div>
      <label for="name">Имя</label>
      <input v-model="form.name" type="text" id="name" placeholder="Введите имя">
      <div v-show="form.errors.name" class="error">
        {{ form.errors.name }}
      </div>
    </div>
    <div>
      <label for="phone">Телефон</label>
      <input v-model="form.phone" ref="phoneInput" type="text" id="phone" placeholder="Введите телефон">
      <div v-show="form.errors.phone" class="error">
        {{ form.errors.phone }}
      </div>
    </div>
    <div>
      <label for="message">Сообщение</label>
      <textarea v-model="form.message" id="message" cols="30" rows="10" placeholder="Введите сообщение"></textarea>
      <div v-show="form.errors.message" class="error">
        {{ form.errors.message }}
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
  </form>
</template>

<script>
import { onMounted, ref, watch } from 'vue';
import { useForm } from "@inertiajs/inertia-vue3";
import Inputmask from 'inputmask';
import Layout from "../Layouts/Default.vue";
import FlashMessages from "../Components/FlashMessages.vue";

export default {
  layout: Layout,

  components: { FlashMessages },

  setup() {
    const phoneInput = ref(null);

    onMounted(() => {
      const inputmask = new Inputmask({
        mask: '+7 (999) 999 99-99',
      });

      inputmask.mask(phoneInput.value);
    });

    const form = useForm({
      name: '',
      phone: '',
      message: '',
    });

    watch(() => form.name, () => form.clearErrors('name'));
    watch(() => form.phone, () => form.clearErrors('phone'));
    watch(() => form.message, () => form.clearErrors('message'));

    const submit = () => {
      form
        .transform((data) => ({
          ...data,
          phone: data.phone.replace(/\D/g, ''),
        }))
        .post('/feedback/store', {
          onSuccess: () => form.reset(),
        });
    };

    return { form, phoneInput, submit }
  }
}
</script>
