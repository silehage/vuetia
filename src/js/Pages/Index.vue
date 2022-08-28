<template>
  <section class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8">
    <article v-for="post in props.posts" :key="post.id" class="mb-6">
      <div class="flex space-x-6">
        <img v-if="post.post_thumbnail" :src="post.post_thumbnail" class="w-36 object-cover h-36 border"/>
        <div class="">
          <Link :href="post.post_link" class="text-blue-700 hover:text-blue-800">
            <h2 class="text-xl">{{ post.post_title }}</h2>
          </Link>
          <p v-html="post.post_teaser" class="mt-2"></p>
        </div >
      </div>
    </article>
  </section>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/inertia-vue3'

const { props } = usePage()
</script>

<style></style>
