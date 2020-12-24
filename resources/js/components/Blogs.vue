
<template>
<div class="container">
    <div class="row mb-2">
        <!-- V-for нужен для перебора выгруженных с БД постов -->
        <div class="col-md-6" v-for="post in posts">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">{{post.type}}</strong>
                <h3 class="mb-0">{{post.title}}</h3>
                <div class="mb-1 text-muted">{{post.created_at}}</div>
                <p class="card-text mb-auto">{{post.descr}}</p>
                </div>
                <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

                </div>
            </div>
        </div>
      
        
  </div>
</div>
</template>

<script>//Скрип для выгрузки постов с БД
import axios from 'axios';

    export default {
        data: ()=>({
            posts:[]
        }),
        mounted() {
            this.loadPosts();
        },
        methods:{
            loadPosts(){
                axios.get('/api/posts')
                .then(res=>{
                    this.posts= res.data;
                })
            }
        }
    }
</script>