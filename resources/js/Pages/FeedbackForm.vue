<template>
  <h1 class="text-2xl font-semibold text-blue-700">Обратная связь</h1>
  <form class="border border-gray-300 rounded-lg p-6 mt-6 space-y-3">
    <div>
      <label for="name">Имя</label>
      <input type="text" id="name" placeholder="Введите имя">
    </div>
    <div>
      <label for="phone">Телефон</label>
      <input type="text" id="phone" placeholder="Введите телефон">
    </div>
    <div>
      <label for="message">Сообщение</label>
      <textarea id="message" cols="30" rows="10" placeholder="Введите сообщение"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
  </form>
</template>

<script>
import Layout from "../Layouts/Default.vue";

export default {
  layout: Layout,
}
</script>
