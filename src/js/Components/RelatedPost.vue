<template>
  <div>
    <Link v-for="(post, index) in data" :key="index" :href="post.post_link" class="link-box">
      <img v-if="post.post_thumbnail" :src="post.post_thumbnail" width="40" height="40" class="object-cover" />
      <h2 class="text-md">{{ post.post_title }}</h2>
    </Link>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
defineProps(['data'])
</script>