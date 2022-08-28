<template>
  <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8">
     <h1 class="text-3xl my-5">{{ post.post_title }}</h1>

    <div class="bg-gray-50 my-8">
      <div class="max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:tracking-tight">
          <span class="block">Ready to dive in?</span>
          <span class="block text-indigo-600">Start your free trial today.</span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
          <div class="inline-flex rounded-md shadow">
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"> Get started </a>
          </div>
          <div class="ml-3 inline-flex rounded-md shadow">
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50"> Learn more </a>
          </div>
        </div>
      </div>
    </div>

    <div class="flex space-x-8">
      <div v-html="post.post_content" class="flex-1 bg-white"></div>
      <div style="width:320px;" class="bg-white">
        <relatedPosts :data="related_posts"/>
      </div>
    </div>
  </div>
</template>

<script setup>
import relatedPosts from './../Components/RelatedPost.vue'

defineProps(['post', 'related_posts'])

</script>

<style></style>
