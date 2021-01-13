require('./bootstrap');

require('alpinejs');

import { createApp } from 'vue';
import FollowButton from './components/FollowButton.vue'

createApp(FollowButton).mount("#app")
