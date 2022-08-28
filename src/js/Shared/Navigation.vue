<template>
  <nav class="bg-gray-800">
    <div class="max-w-6xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="md:hidden lg:hidden xl:hidden">
          <button @click="menuMobile = !menuMobile" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center md:items-stretch md:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=500" alt="Workflow">
            <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=500" alt="Workflow">
          </div>
          <div class="hidden md:block md:ml-6">
            <div class="flex space-x-4">
              <Link class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"  :href="menu.link" v-for="menu in props.primary_menu" :key="menu.id">
                {{ menu.name }}
                </Link>
            </div>
          </div>
        </div>

      </div>
    </div>
     <div class="md:hidden lg:hidden xl:hidden" v-show="menuMobile">
      <div class="">
        <Link @click="menuMobile = false" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"  :href="menu.link" v-for="menu in props.primary_menu" :key="menu.id">
          {{ menu.name }}
          </Link>
      </div>
    </div>
  </nav>

</template>

<script setup>
import { Link, usePage } from '@inertiajs/inertia-vue3'
import { ref } from '@vue/reactivity'

const { props } = usePage()

const menuMobile = ref(false)
</script>

<style></style>
