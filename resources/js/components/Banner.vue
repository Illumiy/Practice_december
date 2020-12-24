<template>
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark bg-banner">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Блог Алексея Волкова, путешествуйте со мной по всему миру!</h1>
      <p class="lead my-3">Я побывал уже в более 30 странах нашего мира, впереди ещё сотня!</p>
    </div>
  </div>
  
</template>

<script>
    export default {
        mounted() {
                      // Проверка на подключение компонента
            console.log('Component banner mounted.')
        }
    }
</script>