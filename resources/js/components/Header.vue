
  <template>
   <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="/">A_Volk_Blog</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary btm-nav" href="login">Войти</a>
      </div>
    </div>
    </header>
</template>

<script>
    export default {
        mounted() {
            // Проверка на подключение компонента
            console.log('Component header mounted.')
        }
    }
</script>