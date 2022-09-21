import './bootstrap';
import { createApp } from 'vue';
import TestVue from './components/users/TestVue.vue';
import ProfileVue from './components/users/ProfileVue.vue';

const app = createApp({})
app.component('profile-vue', ProfileVue);
app.mount('#app')